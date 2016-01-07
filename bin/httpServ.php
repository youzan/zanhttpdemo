<?php
/**
 * Created by PhpStorm.
 * User: hupp
 * Date: 15/12/18
 * Time: 下午4:02
 */

$config = require(dirname(__DIR__) . '/resource/config.php');

require (APP_PATH . '/vendor/zanphp/zan/src/Zan.php');
require (APP_PATH . '/vendor/autoload.php');

\Zan\Framework\Zan::createHttpApplication($config)->run();





