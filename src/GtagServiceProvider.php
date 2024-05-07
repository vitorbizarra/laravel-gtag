<?php

namespace VitorBizarra\Gtag;

use Illuminate\Support\ServiceProvider;

class GtagServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'gtag');

        $this->publishes([
            __DIR__.'/../config/gtag.php' => config_path('gtag.php'),
        ], 'laravel-gtag-config');

        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/laravel-gtag'),
        ], 'laravel-gtag-views');

        $this->app['view']->creator(
            ['gtag::script'],
            'VitorBizarra\Gtag\ScriptViewCreator'
        );
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/gtag.php', 'gtag');

        $this->app->singleton(Gtag::class, function ($app) {
            $gtag = new Gtag(
                config('gtag.id'),
                config('gtag.domain'),
                config('gtag.enabled')
            );

            return $gtag;
        });

        $this->app->alias(Gtag::class, 'gtag');
    }
}
