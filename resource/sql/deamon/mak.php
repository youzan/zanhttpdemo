<?php
return [
    'table'             => 'market',
    'insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO member_log #INSERT#',
    ],
    'batch_insert' => [
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO member_log #INSERTS#',
    ],
    'row_demo_sql_id1_1'      => [
        'sql'           => "
            SELECT * FROM member_log
            WHERE 1
            AND `kdt_id` = #{kdt_id}
            AND `buyer_id` = #{buyer_id}
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
            AND `buyer_id` in #{buyer_id}
        ",
    ],
    'update_new_level_id' => [
        'sql' => "
            UPDATE member_log set #DATA# #AND#
            WHERE 1
            AND `id` = #{kdt_id}
        ",
    ]
];