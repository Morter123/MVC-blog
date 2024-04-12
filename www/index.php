<?php 

// Подключаю пути
require_once dirname(__DIR__) . '/config/config.php';

// Подключаю функции
require_once CORE . '/func.php';

// Подключаю БД
require_once CORE . '/classes/Db.php';
$db_config = require_once CONFIG . '/db.php';
$db = new Db($db_config);

// dump();

// Подключаю контроллер с views
require_once CORE . '/router.php';


