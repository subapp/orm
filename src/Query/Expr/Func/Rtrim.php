<?php

namespace Subapp\Orm\Query\Expr\Func;

use Subapp\Orm\Exception\BadCallMethodException;
use Subapp\Orm\Query\Expr\Func;

class Rtrim extends Func
{
    
    /**
     * Rtrim constructor.
     * MySQL Function RTRIM
     *
     * @param array $parameters
     *
     * @throws BadCallMethodException
     */
    public function __construct(...$parameters)
    {
        parent::__construct('RTRIM', $parameters);
    }
    
}