<?php

namespace VitorBizarra\GoogleAnalytics\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use VitorBizarra\GoogleAnalytics\GoogleAnalyticsServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            GoogleAnalyticsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-google-analytics_table.php.stub';
        $migration->up();
        */
    }
}
