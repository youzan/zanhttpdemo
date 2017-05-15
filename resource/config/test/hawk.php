<?php
/**
 * Created by IntelliJ IDEA.
 * User: Demon
 * Date: 16/5/3
 * Time: 上午11:50
 */

return [
    //是否运行, pre不需要运行
    'run' => true,
    'host' => 'hawk-qa.s.qima-inc.com',
    'port' => 9299,
    'uri' => '/monitor/push',
    //上报时间每60秒一次
    'time' => 60000,
];