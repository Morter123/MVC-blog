<?php

session_start();

use vendor\Router;

require_once dirname(__DIR__) . '/config/config.php';
require_once dirname(__DIR__) . '/vendor/autoload.php';

require_once __DIR__ . '/bootstrap.php';

require_once CORE . "/func.php";
$router = new Router();

require_once CONFIG . '/routes.php';
// Чтобы не забывать, фактически отображение страницы происходит внутри метода $router->match, поэтому там не видно переменные находящиеся здесь
$router->match();



