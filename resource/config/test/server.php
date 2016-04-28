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
        'reaction_limit' => 500,     //
        'live_time' => 1800000,         //30m
        'check_time' => 1000,           //1s
        'memory_limit' => 1610612736,   //1.5G
        'cpu_limit' => 70,
    ]
];