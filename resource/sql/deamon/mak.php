<?php
return [
    'table'             => 'market',
    'insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO member_log #INSERT#',
    ],

    'get'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'select * from member_log where id = 1',
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
            AND `buyer_id` = #{buyer_id}
        ",
    ],
    'select_sql_id1_2_all'      => [
        'sql'           => "
            SELECT * FROM member_log
            WHERE 1
            AND `kdt_id` = #{kdt_id}
            AND `buyer_id` = #{buyer_id}
        ",
    ],
    'select_sql_id1_2_all_aaa'      => [
        'sql'           => "
            SELECT * FROM member_log
            WHERE 1 #WHERE# limit 1
        ",
    ],
    'update_new_level_id' => [
        'sql' => "
            UPDATE member_log set #DATA#, #AND#
            WHERE 1
            AND `id` = #{id}
        ",
    ],
    'select_id' => [
        'sql' => "
            SELECT * FROM member_log
            WHERE 1
            AND `id` = #{id}
        ",
    ],
    'row_fans_get'  => [
        'sql' => ' SELECT fans_id,user_id,taobao_user_id,mp_id,fans_weixin_openid,fans_nickname,`comment` FROM fans
            WHERE 1
            AND `fans_id` = #{fans_id}',
    ]
];