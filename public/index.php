<?php

use vendor\Db;

session_start();

require_once dirname(__DIR__) . '/vendor/autoload.php';
// Подключаю пути
require_once dirname(__DIR__) . '/config/config.php';

// Подключаю функции
require_once CORE . "/func.php";

// Подключаю БД
// require_once CORE . '/classes/Db.php';
$db_config = require_once CONFIG . '/db.php';
$db = (Db::getInstance())->getConnection($db_config);


// Подключаю контроллер с views
require_once CORE . '/router.php';
