<?php

namespace Subapp\Orm\Core;

use Subapp\Orm\Collection\Collection;
use Subapp\Orm\Common\Inflector;
use Subapp\Orm\Core\Domain\EntityInterface;

/**
 * Class Domain
 * @package Subapp\Orm\Core\Domain
 */
abstract class Entity implements EntityInterface
{
    
    protected $virtual;
    
    /**
     * Domain constructor.
     */
    public function __construct()
    {
        $this->virtual = new Collection();
    }
    
    /**
     * @return array
     */
    function jsonSerialize()
    {
        return $this->toArray();
    }
    
    /**
     * @param array $keys
     * @param int   $accessLevel
     * @param bool  $underscoreKeys
     *
     * @return array
     */
    public function toArray(array $keys = [], $accessLevel = \ReflectionProperty::IS_PUBLIC, $underscoreKeys = false)
    {
        $collection = [];
        $reflection = new \ReflectionObject($this);
        
        foreach ($reflection->getProperties($accessLevel) as $property) {
            
            if (empty($keys) || in_array($property->getName(), $keys, true)) {
                
                $propertyValue = $property->getValue($this);
                $propertyName = $underscoreKeys ? Inflector::underscore($property->getName()) : $property->getName();
                
                $collection[$propertyName] = ($propertyValue instanceof EntityInterface)
                    ? $propertyValue->toArray([], $accessLevel) : $propertyValue;
                
            }
        }
        
        return $collection;
    }
    
    /**
     * @inheritDoc
     */
    public function hasName($name)
    {
        return $this->hasProperty(Inflector::camelize($name));
    }
    
    /**
     * @inheritDoc
     */
    public function hasProperty($propertyName)
    {
        return property_exists($this, $propertyName);
    }
    
    /**
     * @inheritDoc
     */
    public function getByName($name, $default = null)
    {
        return $this->getByProperty(Inflector::camelize($name), $default);
    }
    
    /**
     * @inheritDoc
     */
    public function getByProperty($propertyName, $default = null)
    {
        return $this->hasProperty($propertyName) ? $this->$propertyName : $default;
    }
    
    /**
     * @inheritDoc
     */
    public function setByName($name, $value)
    {
        return $this->setByProperty(Inflector::camelize($name), $value);
    }
    
    /**
     * @inheritDoc
     */
    public function setByProperty($propertyName, $value)
    {
        if ($this->hasProperty($propertyName)) {
            $this->$propertyName = $value;
        }
        
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function getVirtual($offset)
    {
        return $this->virtual->get($offset);
    }
    
    /**
     * @inheritDoc
     */
    public function setVirtual($offset, $value = null)
    {
        $this->virtual->set($offset, $value);
        
        return $this;
    }
    
    /**
     * @inheritDoc
     */
    public function getVirtualColumns()
    {
        return $this->virtual;
    }
    
    /**
     * @inheritdoc
     */
    public function hashCode()
    {
        return sha1(json_encode($this->toArray()));
    }
    
    /**
     * @inheritDoc
     */
    public function beforePersist()
    {
    }
    
    /**
     * @inheritDoc
     */
    public function beforeRemove()
    {
    }
    
    /**
     * @inheritDoc
     */
    public function afterPersist()
    {
    }
    
    /**
     * @inheritDoc
     */
    public function afterRemove()
    {
    }
    
}
