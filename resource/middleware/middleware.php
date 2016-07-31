<?php
return [
    'group'     => [
        'demo'   => [
            Com\Youzan\ZanHttpDemo\Middleware\DemoFilter::class,
            Com\Youzan\ZanHttpDemo\Middleware\DemoTerminator::class
        ],
    ],
    'match'     => [
        ['^route/.*', 'demo'],
    ],
];