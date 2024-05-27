<?php

return [
    'prefix' => '/api/',

    'middleware' => ['api'],

    /* Services to check for
     * Please choose from 'database', 'redis', 'queues', 'mail'
     *
     */
    'services' => [
        'database', 'mail', 'crm'
    ]
];
