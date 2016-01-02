<?php
/**
 * Created by PhpStorm.
 * User: hupeipei
 * Date: 15/12/18
 * Time: 下午4:02
 */

define('APP_PATH', __DIR__);
require dirname(__DIR__). '/vendor/zanphp/zan/src/Zan.php';

(new HttpServer)->run($argv[1]);





