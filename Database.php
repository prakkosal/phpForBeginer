<?php

class Database
{
    public $conn;
    public function __construct($config)
    {
        $dsn = "mysql:host={$config['hostname']};port={$config['port']};dbname={$config['database']};charset=utf8mb4";
        $this->conn = new PDO($dsn, $config['username'], $config['password']);
    }
    public function Query($query)
    {
        try {
            $statement = $this->conn->prepare($query);
            $statement->execute();
            return $statement;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}
