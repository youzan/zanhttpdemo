<?php

return [
    "app_names" => [
        "tcp-demo"
    ],

    "novaApi" => [
        "tcp-demo" => [
            "path" => "vendor/nova-service/nova-demo/sdk/gen-php",
            "namespace" => "Com\\Youzan\\Demo\\",
        ]
    ],

    "connection" => [
        "tcp-demo" => [
            "host" => "127.0.0.1",
            "port" => 8100,
        ],
    ],
];