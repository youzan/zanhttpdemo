<?php
return [
    'common'           => [
        'connection'    => 'redis.default_write',
    ],
    'test' => [
        'key' => 'test_abc_%s_%s',
        'exp' => 10
    ],
];