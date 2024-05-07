<?php

namespace VitorBizarra\GoogleAnalytics;

use Illuminate\Support\ServiceProvider;

class GoogleAnalyticsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'google-analytics');

        $this->publishes([
            __DIR__.'/../config/google-analytics.php' => config_path('google-analytics.php'),
        ], 'laravel-google-analytics-config');

        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/laravel-google-analytics'),
        ], 'laravel-google-analytics-views');

        $this->app['view']->creator(
            ['google-analytics::script'],
            'VitorBizarra\GoogleAnalytics\ScriptViewCreator'
        );
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/google-analytics.php', 'google-analytics');

        $this->app->singleton(GoogleAnalytics::class, function ($app) {
            $googleAnalytics = new GoogleAnalytics(
                config('google-analytics.id'),
                config('google-analytics.domain'),
                config('google-analytics.enabled')
            );

            return $googleAnalytics;
        });

        $this->app->alias(GoogleAnalytics::class, 'google-analytics');
    }
}
