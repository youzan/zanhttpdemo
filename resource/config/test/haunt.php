<?php
/**
 * Created by PhpStorm.
 * User: xiaoniu
 * Date: 16/5/30
 * Time: 下午5:24
 */
return [
    'get' => [
        'host' => '192.168.66.237',
        'port' => 2379,
        'timeout' => 35,
        'uri' => '/v2/keys',
        'protocol' => 'nova',
        'namespace' => 'com.youzan.service',
        'server_name' => 'pf-api'
    ],
    'watch' => [
        'host' => '192.168.66.237',
        'port' => 2379,
        'timeout' => 10,
        'uri' => '/v2/keys',
        'protocol' => 'nova',
        'namespace' => 'com.youzan.service',
        'server_name' => 'pf-api',
    ],
];