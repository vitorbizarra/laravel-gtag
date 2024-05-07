<?php

namespace VitorBizarra\GoogleAnalytics\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \VitorBizarra\GoogleAnalytics\GoogleAnalytics
 */
class GoogleAnalytics extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'google-analytics';
    }
}
