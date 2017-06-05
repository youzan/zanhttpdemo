<?php
return [
    'common'           => [
        'connection'    => 'redis.default_write',
    ],
    'some_tpl' => [
        'key' => 'test_abc_%s_%s',
        'exp' => 10
    ],
];