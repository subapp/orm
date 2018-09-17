<?php

namespace Subapp\Orm\Query\Builder\Syntax;

use Subapp\Orm\Query\Statement\Limit;

/**
 * Class LimitTrait
 * @package Subapp\Orm\Query\Builder\Syntax
 */
trait LimitTrait
{
    
    /**
     * @param $offset
     *
     * @return $this
     */
    public function offset($offset)
    {
        $this->getLimitStatement()->setOffset($offset);
        
        return $this;
    }
    
    /**
     * @param $limit
     *
     * @return $this
     */
    public function limit($limit)
    {
        $this->getLimitStatement()->setLimit($limit);
        
        return $this;
    }
    
    /**
     * @param $offset
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->getLimitStatement()->setOffset($offset);
        
        return $this;
    }
    
    /**
     * @param $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->getLimitStatement()->setLimit($limit);
        
        return $this;
    }
    
    /**
     * @return Limit
     */
    abstract public function getLimitStatement();
    
}