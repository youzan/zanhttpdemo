<?php

define('APP_PATH', dirname(__DIR__));
define('APP_INIT_PATH', APP_PATH . '/init');
define('APP_RESOURCE_PATH', APP_PATH . '/resource');

return [
    'config_path'       =>   APP_RESOURCE_PATH. '/config',
    'cache_path'        =>   APP_RESOURCE_PATH. '/cache',
    'sql_path'          =>   APP_RESOURCE_PATH. '/sql',
    'pre_filter_path'   =>   APP_INIT_PATH . '/PreFilter',
    'post_filter_path'  =>   APP_INIT_PATH . '/PostFilter',
];