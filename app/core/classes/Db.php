<?php

final class Db
{

    // Приватная, чтобы нельзя было создать извне
    private $connection;
    private $stmt;
    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    // При создании экземпляра класса Db,,,, переменной $connect, принадлежащей текущему (создаваемому) объекту, присваиваю - "подключение PDO", 
    public function getConnection(array $db_config)
    {
        try {
            $dsn = "mysql:host={$db_config['host']};dbname={$db_config['dbname']};charset={$db_config['charset']}";
            $this->connection = new PDO($dsn, $db_config['username'], $db_config['password'], $db_config['options']);
            return self::$instance;
        } catch (PDOException $e) {
            abort(500);
        }
    }

    function query($query, $params = [])
    {
        try {
            $this->stmt = $this->connection->prepare($query);
            $this->stmt->execute($params);
            return $this;
        } catch (PDOException $e) {
            abort(500);
        }
    }

    // Файнды нужны для возможности обращения к объекту, а не PdoStatement'y

    function findAll()
    {
        return $this->stmt->fetchAll();
    }

    function find()
    {
        return $this->stmt->fetch();
    }

    function findOrFail()
    {
        $res = $this->find();
        if (!$res) {
            abort();
        }
        return $res;
    }
}
