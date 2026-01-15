<?php

return [


    'paths' => ['api/*'],           

    'allowed_methods' => ['*'],       // all HTTP methods

'allowed_origins' => [
    env('VITE_APP_URL', 'http://localhost:5173'),
    'https://taskmanager-zeta-bay.vercel.app',
],
                             // array of allowed origins

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,                    // integer, fine as-is

    'supports_credentials' => false,  // boolean
];
