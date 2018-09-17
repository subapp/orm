<?php

namespace Subapp\Orm\Query\Expr\Func;

use Subapp\Orm\Exception\BadCallMethodException;
use Subapp\Orm\Query\Expr\Func;

class Week extends Func
{
    
    /**
     * Week constructor.
     * MySQL Function WEEK
     *
     * @param array $parameters
     *
     * @throws BadCallMethodException
     */
    public function __construct(...$parameters)
    {
        parent::__construct('WEEK', $parameters);
    }
    
}