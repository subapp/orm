<?php

namespace Subapp\Orm\Query\Expr\Func;

use Subapp\Orm\Exception\BadCallMethodException;
use Subapp\Orm\Query\Expr\Func;

class ToDays extends Func
{
    
    /**
     * ToDays constructor.
     * MySQL Function TO_DAYS
     *
     * @param array $parameters
     *
     * @throws BadCallMethodException
     */
    public function __construct(...$parameters)
    {
        parent::__construct('TO_DAYS', $parameters);
    }
    
}