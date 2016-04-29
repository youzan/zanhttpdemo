<?php
/**
 * Created by IntelliJ IDEA.
 * User: winglechen
 * Date: 16/3/16
 * Time: 19:33
 */

return [
    'host'          => '127.0.0.1',
    'port'          => '8030',
    'config' => [
        'worker_num'    => 2,
    ],
    'monitor' =>[
        'max_request'   => 100000,            //
        'max_live_time' => 1800000,         //30m
        'check_interval'=> 1000,           //1s
        'memory_limit'  => 1.5 * 1024 * 1024 * 1024,       //1.50G
        'cpu_limit'     => 70,
    ]
];