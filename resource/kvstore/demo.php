<?php

return [
    'common'           => [
        'connection'    => 'kvstore.default', // 对应 connection/kvstore.php中配置
    ],
    'cc' => [
        'key' => 'pic_ad_%d',
        'exp' => 10,
        'namespace' => 'youzan',
        'set' => 'aaaatest'
    ],
];