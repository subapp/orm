<?php

namespace Subapp\Orm\Core;

use Subapp\Orm\Common\ObjectIdentity;
use Subapp\Orm\Core\Domain\MetadataInterface;
use Subapp\Orm\Core\Event\MetadataLoadEvent;
use Subapp\Orm\Exception\NotFoundException;
use Subapp\Orm\ServiceContainer\ServiceLocatorInterface;

/**
 * Class MetadataManager
 * @package Subapp\Orm\Core
 */
class MetadataManager
{
    
    /**
     * @var ServiceLocatorInterface
     */
    protected $serviceLocator;
    
    /**
     * @var mixed
     */
    protected $metadata;
    
    /**
     * @var \SplFileInfo
     */
    protected $file;
    
    /**
     * MetadataManager constructor.
     *
     * @param                         $metadataFile
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @throws NotFoundException
     */
    public function __construct($metadataFile, ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
        $this->file = new \SplFileInfo($metadataFile);
        
        if ($this->file->isFile()) {
            $this->metadata = include_once $this->file->getRealPath();
        } else {
            throw new NotFoundException('Metadata file ":file" was not found', ['file' => $metadataFile]);
        }
    }
    
    /**
     * @param $class
     *
     * @return Metadata
     * @throws NotFoundException
     */
    public function getMetadataFor($class)
    {
        if (isset($this->metadata[$class])) {
            
            $identity = new ObjectIdentity(sprintf('%s@%s', Metadata::class, $class));
            if (!$this->getClassManager()->hasShared($identity->getIdentifier())) {
                /**
                 * @var MetadataInterface $metadata
                 */
                $metadata = $this->getClassManager()->createInstanceFor(Metadata::class, ...[$this->metadata[$class]]);
                $dispatcher = $this->getServiceLocator()->getDispatcher();
                
                $dispatcher->dispatch(ORMEvents::onMetadataLoad, new MetadataLoadEvent($metadata));
                
                $this->getClassManager()->setShared($identity->getIdentifier(), $metadata);
            }
            
            return $this->getClassManager()->getShared($identity->getIdentifier());
        }
        
        throw new NotFoundException('Metadata for ":class" not found', ['class' => $class]);
    }
    
    /**
     * @return ClassManager
     */
    public function getClassManager()
    {
        return $this->getServiceLocator()->getClassManager();
    }
    
    /**
     * @return ServiceLocatorInterface
     */
    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }
    
    /**
     * @return array
     */
    public function getMetadataArray()
    {
        return $this->metadata;
    }
    
}