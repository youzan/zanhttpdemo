<?php
/**
 * Created by PhpStorm.
 * User: heize
 * Date: 16/4/5
 * Time: 下午4:53
 */
return [
    'default' => [
        'engine'=> 'kVStore',
        //ip列表，将会对每一个建立链接
        'ip_list' => [
            '10.9.12.205:3000',
        ],
        'user' => '',
        'password' => '',
        'policy' => [
            'timeout' => 1000,
        ],
        'pool'  => [
            'keeping-sleep-time' => 10000,
            //初始化多少个链接，为0则不启用
            'init-connection'=> 5,
        ],
    ],
];