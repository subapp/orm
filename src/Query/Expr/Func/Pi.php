<?php

namespace Subapp\Orm\Query\Expr\Func;

use Subapp\Orm\Exception\BadCallMethodException;
use Subapp\Orm\Query\Expr\Func;

class Pi extends Func
{
    
    /**
     * Pi constructor.
     * MySQL Function PI
     *
     * @param array $parameters
     *
     * @throws BadCallMethodException
     */
    public function __construct(...$parameters)
    {
        parent::__construct('PI', $parameters);
    }
    
}