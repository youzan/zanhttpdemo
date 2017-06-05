<?php

// 参见sqlmap文档
return [
    'table'             => 'market',
    'insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO market #INSERT#',
    ],

    'demo_sql_id1_1'      => [
        'table' => "TABLES",
        'sql'           => "
            SELECT * FROM TABLES
            #LIMIT#
        ",
    ],
    'demo_sql_id1_2_all'      => [
        'sql'           => "
            SELECT * FROM member_log
            WHERE 1
            AND `kdt_id` = #{kdt_id}
            AND `buyer_id` in #{buyer_id}
            #LIMIT#
        ",
    ],
    'count_sql_id1_2_all'      => [
        'sql'           => "
            SELECT #COUNT# FROM member_log
            WHERE 1
            AND `kdt_id` = #{kdt_id}
            AND `buyer_id` = #{buyer_id}
        ",
    ],

];