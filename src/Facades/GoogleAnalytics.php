<?php

namespace VitorBizarra\Gtag\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VitorBizarra\Gtag\Gtag
 */
class Gtag extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'gtag';
    }
}
