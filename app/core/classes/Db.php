<?php

class Db {

    // Приватная, чтобы нельзя было создать извне
    private $connection;
    private $stmt;

    // При создании экземпляра класса Db,,,, переменной $connect, принадлежащей текущему (создаваемому) объекту, присваиваю - "подключение PDO", 
    public function __construct(array $db_config) {
        
        $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}";
        $this->connection = new PDO($dsn, $db_config['username'], $db_config['password'], $db_config['options']);
    }

    function query($query) {
        $this->stmt = $this->connection->prepare($query);
        $this->stmt->execute();
        return $this;
    }

// Файнды нужны для возможности обращения к объекту, а не PdoStatement'y

    function findAll() {
        return $this->stmt->fetchAll();
    }

    function find() {
        return $this->stmt->fetch();
    }

    function findOrFail() {
        $res = $this->find();
        if (!$res) {
            abort();
        }
        return $res;
    }
}