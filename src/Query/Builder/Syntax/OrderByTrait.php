<?php

namespace Subapp\Orm\Query\Builder\Syntax;

use Subapp\Orm\Exception\BadArgumentException;
use Subapp\Orm\Query\Expr;
use Subapp\Orm\Query\Expression;
use Subapp\Orm\Query\Statement\OrderBy;

/**
 * Class OrderByTrait
 * @package Subapp\Orm\Query\Builder\Syntax
 */
trait OrderByTrait
{
    
    /**
     * @return OrderBy
     * @throws BadArgumentException
     */
    abstract public function getOrderByStatement();
    
    /**
     * @param        $column
     * @param string $vector
     *
     * @return $this
     */
    public function addOrderBy($column, $vector = OrderBy::ASC)
    {
        return $this->orderBy($column, $vector);
    }
    
    /**
     * @param        $expression
     * @param string $vector
     *
     * @return $this
     */
    public function orderBy($expression, $vector = OrderBy::ASC)
    {
        $expression = ($expression instanceof Expression) ? $expression : new Expr\Column($expression);
        $this->getOrderByStatement()->order($expression, $vector);
        
        return $this;
    }
    
    /**
     * @return $this
     */
    public function clearOrderByColumns()
    {
        $this->getOrderByStatement()->getExpressions()->clear();
        
        return $this;
    }
    
    /**
     * @param $column
     *
     * @return $this
     */
    public function asc($column)
    {
        return $this->orderByAsc($column);
    }
    
    /**
     * @param $column
     *
     * @return $this
     */
    public function orderByAsc($column)
    {
        return $this->orderBy($column, OrderBy::ASC);
    }
    
    /**
     * @param $column
     *
     * @return $this
     */
    public function desc($column)
    {
        return $this->orderByDesc($column);
    }
    
    /**
     * @param $column
     *
     * @return $this
     */
    public function orderByDesc($column)
    {
        return $this->orderBy($column, OrderBy::DESC);
    }
    
    /**
     * @return $this
     */
    public function orderRandom()
    {
        return $this->orderBy(new Expr\Func('RAND'), null);
    }
    
}
