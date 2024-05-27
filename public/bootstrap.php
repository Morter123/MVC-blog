<?php

use vendor\ServicesContainer;
use vendor\Db;
use vendor\App;

$container = new ServicesContainer();

$container->setService('Db', function() {
    // Подключаю БД
    $db_config = require_once CONFIG . '/db.php';
    return (Db::getInstance())->getConnection($db_config);
});


App::setContainer($container);
$service_container = App::getContainer();
