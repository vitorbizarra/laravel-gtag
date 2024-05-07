<?php

return [
    /*
     * The Google Analytics id, should be a code that looks something like "G-xxxx".
     */
    'id' => env('GOOGLE_ANALYTICS_ID', ''),

    /*
     * Enable or disable script rendering. Useful for local development.
     */
    'enabled' => env('GOOGLE_ANALYTICS_ENABLED', true),

    /*
     * Configures the Google Analytics script domain.
     */
    'domain' => env('GOOGLE_ANALYTICS_DOMAIN', 'www.googletagmanager.com'),
];
