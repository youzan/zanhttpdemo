<?php
/**
 * Created by PhpStorm.
 * User: heize
 * Date: 16/4/5
 * Time: 下午4:53
 */

return [
    'trace' => [
        'engine'=> 'tcp',
        'host' => '10.9.53.85',
        'port' => '2280',
//        'host' => '172.17.10.77',
//        'port' => '2280',
        'timeout' => 5000,
        'config'    => [
            'open_length_check' => 1,
            'package_length_type' => 'N',
            'package_length_offset' => 0,
            'package_body_offset' => 0,
            'open_nova_protocol' => 1
        ],
        'pool'  => [
            'keeping-sleep-time' => 10000,
            'init-connection'=> 5,
        ],
    ],
];