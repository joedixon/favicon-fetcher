<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Driver
    |--------------------------------------------------------------------------
    |
    | The driver that should be used by default for fetching the favicons.
    | By default, the package comes with support for several drivers,
    | but you can define your own if needed.
    |
    | Supported drivers: "http", "google-shared-stuff", "favicon-kit",
    |                    "unavatar", "favicon-grabber"
    |
    */
    'default' => 'http',

    /*
    |--------------------------------------------------------------------------
    | Caching
    |--------------------------------------------------------------------------
    |
    | The package provides support for caching the fetched favicon's URLs.
    | Here, you can specify the different options for caching, such as
    | cache prefix that is prepended to all the cache keys.
    |
    */
    'cache' => [
        'prefix' => 'favicon-fetcher',
    ],

    /*
    |--------------------------------------------------------------------------
    | HTTP Timeouts
    |--------------------------------------------------------------------------
    |
    | Set the timeouts here in seconds for the HTTP requests that are made
    | to fetch the favicons. If the timeout is set to 0, then no timeout
    | will be applied. The connect timeout is the time taken to connect
    | to the server, while the timeout is the time taken to get a
    | response from the server after the connection is made.
    |
    */
    'timeout' => 0,

    'connect_timeout' => 0,
];
