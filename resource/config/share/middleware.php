<?php

return [
    'group'     => [
        'acl'   => [
            // XXX\Middleware\AclFilter::class,
        ],

    ],
    'match'     => [
        ['/market\/.*/', 'acl'],
        ['/goods\/.*/', 'acl'],
        ['/shop\/.*/', 'acl'],
    ],
];