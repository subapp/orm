<?php

namespace Subapp\Orm\Core;

/**
 * Class ORMEvents
 * @package Subapp\Orm\Core
 */
final class ORMEvents
{
    
    /**
     * Event occurs before repository execute search query
     */
    const beforeFindExecute = 'beforeFindExecute';
    
    /**
     * Event occurs after repository execute search query
     */
    const afterFindExecute = 'afterFindExecute';
    
    /**
     * Event occurs before repository trying to persist entity
     */
    const beforePersist = 'beforePersist';
    
    /**
     * Event occurs when repository successfully persist entity
     */
    const afterPersist = 'afterPersist';
    
    /**
     * Event occurs before repository trying to delete entity
     */
    const beforeRemove = 'beforeRemove';
    
    /**
     * Event occurs before repository trying to delete entity
     */
    const afterRemove = 'afterRemove';
    
    /**
     * Event occurs after metadata for entity was loaded.
     * Called one time because then its cached
     */
    const onMetadataLoad = 'onMetadataLoad';
    
    /**
     * Event occurs after new entity was created and hydrated
     */
    const onEntityLoad = 'onEntityLoad';
    
}