<?php

namespace VitorBizarra\GoogleAnalytics;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use VitorBizarra\GoogleAnalytics\Commands\GoogleAnalyticsCommand;

class GoogleAnalyticsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-google-analytics')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-google-analytics_table')
            ->hasCommand(GoogleAnalyticsCommand::class);
    }
}
