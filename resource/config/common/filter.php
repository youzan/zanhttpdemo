<?php

use Zaninit\PreFilter\AclFilter;

return [

    'pre' => [
        AclFilter::className(),
    ],

    'post' => [
        AclFilter::className(),
    ]

];