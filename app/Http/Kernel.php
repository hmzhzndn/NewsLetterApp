<?php

protected $middlewareGroups = [
    'web' => [
        // ...
    ],

    'api' => [
        'throttle:api',
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ],
];
