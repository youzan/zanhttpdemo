<?php
/**
 * Created by PhpStorm.
 * User: xiaoniu
 * Date: 16/5/30
 * Time: 下午5:38
 */
return [
    'timeout' => 5000,
    'persistent' => true,
    'config'    => [
        'open_length_check' => 1,
        'package_length_type' => 'N',
        'package_length_offset' => 0,
        'package_body_offset' => 0,
        'open_nova_protocol' => 1
    ],
    'pool'  => [
        'heartbeat-time' => 5000,
    ],
];
