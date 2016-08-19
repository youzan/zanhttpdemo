<?php
/**
 * Created by PhpStorm.
 * User: xiaoniu
 * Date: 16/8/19
 * Time: 下午3:15
 */

return [
    Com\Youzan\ZanHttpDemo\Service\TestJob::TOPIC => [
        Com\Youzan\ZanHttpDemo\Service\TestJob::CHANNEL => [
            'consumer' => Com\Youzan\ZanHttpDemo\Service\TestJob::class,
            'num' => 1,
        ],
    ]
];
