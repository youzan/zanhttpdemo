<?php
return [
    'table'             => 'market',
    'insert'=>[
        'require' => [],
        'limit'   => [],
        'sql'     => 'INSERT INTO demo #INSERT#',
    ],

    'demo_sql_id1_1'      => [
        'sql'           => "
            SELECT * FROM demo
            WHERE 1
            AND `id` = #{id}
            AND `xxxx` = #{xxxx}
            #LIMIT#
        ",
    ],
    'demo_sql_id1_2_all'      => [
        'sql'           => "
            SELECT * FROM demo
            WHERE 1
            AND `id` = #{id}
            AND `xxxx` in #{xxxx}
            #LIMIT#
        ",
    ],

];