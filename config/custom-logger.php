<?php

return [
    'default' => env('CUSTOM_LOGGER', 'db'),
    'email' => env('CUSTOM_LOGGER_EMAIL', 'admin@test.com'),

    'all_loggers' => [
        'file',
        'email',
        'db'
    ]
];
