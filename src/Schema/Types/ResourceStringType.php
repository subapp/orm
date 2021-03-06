<?php

namespace Subapp\Orm\Schema\Types;

/**
 * Class ResourceStringType
 *
 * @package Subapp\Orm\Schema\Types
 */
class ResourceStringType extends ResourceType
{
    
    /**
     * @inheritDoc
     */
    public function toPhpValue($value)
    {
        return base64_decode(parent::toPhpValue($value));
    }
    
    /**
     * @inheritDoc
     */
    public function toPlatformValue($value)
    {
        return base64_encode(parent::toPlatformValue($value));
    }
    
    /**
     * @inheritDoc
     */
    public function getName()
    {
        return static::RESOURCE;
    }
    
}