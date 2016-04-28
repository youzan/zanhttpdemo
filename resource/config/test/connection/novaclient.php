<?php
/**
 * Created by PhpStorm.
 * User: heize
 * Date: 16/4/5
 * Time: 下午4:53
 */
return [
    'nova.pfapi' => [
        'engine'=> 'novaClient',
        'pool'  => [
            'pool_name' => 'nova.pfapi',
            'keeping-sleep-time' => 10000,
            'init-connection'=> 1,
            'host' => '127.0.0.1',
            'port' => '8020',
            'timeout' => 5000,
            'persistent' => true,
            'config'    => [
                'open_length_check' => 1,
                'package_length_type' => 'N',
                'package_length_offset' => 0,
                'package_body_offset' => 0,
                'open_nova_protocol' => 1
            ],
        ],
    ],
];