<?php

namespace Subapp\Orm\Core\Hydrator;

use Subapp\Orm\Core\Domain;
use Subapp\Orm\Core\Domain\EntityInterface;
use Subapp\Orm\Core\Domain\RepositoryInterface;
use Subapp\Orm\Core\Event\EntityLifecycleEvent;
use Subapp\Orm\Core\Hydrator;
use Subapp\Orm\Core\Hydrator\MetadataValidator\Validator;
use Subapp\Orm\Core\Metadata;
use Subapp\Orm\Core\ORMEvents;
use Subapp\Orm\Core\Proxy\EntityProxy;
use Subapp\Orm\Exception\NotFoundException;

/**
 * Class AbstractHydratorEntity
 * @package Subapp\Orm\Core\Hydrator
 */
abstract class AbstractHydratorEntity extends Hydrator
{
    
    /**
     * @var RepositoryInterface
     */
    protected $repository;
    
    /**
     * @var Validator
     */
    protected $validator;
    
    /**
     * HydratorEntity constructor.
     *
     * @param RepositoryInterface $repository
     */
    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
        $this->validator = new Validator($repository->getEntityMetadata());
        
        parent::__construct($repository->getEntityClassReflection());
    }
    
    /**
     * @param array                       $data
     * @param EntityInterface|EntityProxy $entity
     *
     * @return EntityInterface|EntityProxy
     */
    public function hydrate(array $data, $entity)
    {
        $this->hydrateEntityProperties($entity, $data);
        
        $repository = $this->getRepository();
        $repository->dispatchEvent(ORMEvents::onEntityLoad, new EntityLifecycleEvent($repository, $entity));
        
        return $entity;
    }
    
    /**
     * @param EntityInterface $entity
     * @param array           $injectData
     *
     * @return $this
     */
    protected function hydrateEntityProperties(EntityInterface $entity, array $injectData)
    {
        $metadata = $this->getRepository()->getEntityMetadata();
        
        foreach ($injectData as $sqlName => $propertyValue) {
            try {
                $propertyName = $metadata->getName($sqlName, Metadata::CAMILIZED);
                $propertyValue = $propertyValue !== null
                    ? $metadata->toPhp($metadata->getName($sqlName), $propertyValue) : null;
                $this->setProperty($entity, $propertyName, $propertyValue);
            } catch (NotFoundException $exception) {
                $entity->setVirtual($sqlName, $propertyValue);
            }
        }
        
        return $this;
    }
    
    /**
     * @return RepositoryInterface
     */
    public function getRepository()
    {
        return $this->repository;
    }
    
    /**
     * @param EntityInterface|EntityProxy $entity
     * @param string                      $propertyName
     * @param mixed                       $propertyValue
     *
     * @return $this
     */
    protected function setProperty($entity, $propertyName, $propertyValue)
    {
        if ($this->getReflection()->hasProperty($propertyName)) {
            $property = $this->getReflection()->getProperty($propertyName);
            $property->setValue($entity, $propertyValue);
        } else {
            $entity->setVirtual($propertyName, $propertyValue);
        }
        
        return $this;
    }
    
    /**
     * @param object $entity
     *
     * @return array
     */
    public function extract($entity)
    {
        $metadata = $this->getMetadata();
        $collection = [];
        
        foreach ($metadata->getSQLNames() as $sqlName) {
            $propertyName = $metadata->getName($sqlName, Metadata::CAMILIZED);
            $propertyValue = $this->getReflection()->getProperty($propertyName)->getValue($entity);
            $propertyValue = $propertyValue !== null
                ? $metadata->toPlatform($metadata->getName($sqlName), $propertyValue) : null;
            $collection[$sqlName] = $propertyValue;
        }
        
        return $collection;
    }
    
    /**
     * @return Domain\MetadataInterface
     */
    public function getMetadata()
    {
        return $this->getRepository()->getEntityMetadata();
    }
    
    /**
     * @return Validator
     */
    public function getValidator()
    {
        return $this->validator;
    }
    
}
