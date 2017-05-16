<?php
/**
 * Created by PhpStorm.
 * User: xiaoniu
 * Date: 16/8/23
 * Time: 下午9:47
 */
return [
    'app_names' => [
        'TcpDemo'
    ],
    'novaApi' => [
        'TcpDemo' => [
            'path'  => 'vendor/nova-service/nova-demo/sdk/gen-php',
            'namespace' => 'Com\\Youzan\\Demo\\'
        ]
    ],
    'connection' => [
        'TcpDemo' => [
            'host' => '127.0.0.1',
            'port' => '8051',
        ],
    ],
];
