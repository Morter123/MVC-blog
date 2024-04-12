<?php

class Db {

    // Приватная, чтобы нельзя было создать извне
    private $conn;

    // При создании экземпляра класса Db,,,, переменной $conn, принадлежащей текущему (создаваемому) объекту, присваиваю - "подключение PDO", 
    public function __construct(array $db_config) {
        
        $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}";
        $this->conn = new PDO($dsn, $db_config['username'], $db_config['password'], $db_config['options']);
    }

    function query($query) {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}