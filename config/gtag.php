<?php

return [
    /*
     * The Google gtag id, should be a code that looks something like "G-xxxx".
     */
    'id' => env('GTAG_ID', ''),

    /*
     * Enable or disable script rendering. Useful for local development.
     */
    'enabled' => env('GTAG_ENABLED', true),

    /*
     * Configures the Google gtag script domain.
     */
    'domain' => env('GTAG_DOMAIN', 'www.googletagmanager.com'),
];
