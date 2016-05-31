<?php

return [
    'client' => [
        'host' => '127.0.0.1',
        'port' => '8050',
        'timeout' => 5,
        'persistent' => false,
        'config'    => [
            'open_length_check' => 1,
            'package_length_type' => 'N',
            'package_length_offset' => 0,
            'package_body_offset' => 0,
            'open_nova_protocol' => 1
        ],
    ],

];
