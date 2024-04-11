<?php

class Db {

    private $conn;

    public function __construct(array $db_config) {
        
        $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}";
        $this->conn = new PDO($dsn, $db_config['username'], $db_config['password'], $db_config['options']);
    }
}