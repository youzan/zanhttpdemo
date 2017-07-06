<?php

return [
    'common'           => [
        'connection'    => 'redis.default_write',
    ],

    'session' => [
        'key' => 'PHPREDIS_SESSION:%s',
        'exp' => 3600 * 24,
    ],
];