<?php

return [
    'server' => [
        'host'          => '127.0.0.1',
        'port'          => '5601',
        'option'        => [
            'worker_num'      => 4,
            'max_request'     => 5000,
            'dispatch_mode'   => 1,
            'backlog'         => 128
        ],
    ],

    'client' => [
        'host'          => '127.0.0.1',
        'port'          => '5601',
        'timeout'       => 2,
        'persistent'    => true
    ],

];