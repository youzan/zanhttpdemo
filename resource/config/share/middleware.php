<?php
/**
 * Created by PhpStorm.
 * User: chenfan
 * Date: 16/4/11
 * Time: 下午8:56
 */
return [
    'group'     => [
        'acl'   => [
            PfMarketManage\Middleware\AclFilter::class,
            PfMarketManage\Middleware\MarketFilter::class,
        ],

    ],
    'match'     => [
        ['/market\/.*/', 'acl'],
        ['/goods\/.*/', 'acl'],
        ['/shop\/.*/', 'acl'],


    ],
];