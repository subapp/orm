<?php

namespace Subapp\Orm\Core\State;

use Subapp\Orm\Common\StringableInterface;

/**
 * Class State
 * @package Subapp\Orm\Core\State
 */
class State implements StateInterface, StringableInterface
{
    
    const LOCKED   = 'LOCKED';
    const UNLOCKED = 'UNLOCKED';
    
    /**
     * @var
     */
    private $state;
    
    /**
     * @var StateIdentifierInterface
     */
    private $identifier;
    
    /**
     * @var StateIdentifierInterface
     */
    private $owner;
    
    /**
     * State constructor.
     *
     * @param string                   $state
     * @param StateIdentifierInterface $identifier
     * @param StateIdentifierInterface $owner
     */
    public function __construct(string $state, StateIdentifierInterface $identifier, StateIdentifierInterface $owner)
    {
        $this->state = $state;
        $this->identifier = $identifier;
        $this->owner = $owner;
    }
    
    /**
     * @return string
     */
    public function toString(): string
    {
        return sprintf('Object %s has "%s" state by %s',
            $this->getIdentifier()->getObjectName(), $this->getState(), $this->getOwner()->getObjectName());
    }
    
    /**
     * @return StateIdentifierInterface
     */
    public function getIdentifier(): StateIdentifierInterface
    {
        return $this->identifier;
    }
    
    /**
     * @return mixed
     */
    public function getState(): string
    {
        return $this->state;
    }
    
    /**
     * @return StateIdentifierInterface
     */
    public function getOwner(): StateIdentifierInterface
    {
        return $this->owner;
    }
    
}