<?php

session_start();

use vendor\Router;

require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/vendor/autoload.php';
// Подключаю пути
require_once __DIR__ . '/bootstrap.php';

require_once CORE . "/func.php";

$router = new Router();
require_once CONFIG . '/routes.php';
$router->match();


