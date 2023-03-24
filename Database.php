<?php
class Database {
    protected $host = '127.0.0.1';
    protected $username = 'root';
    protected $password = 'root';
    protected $port  =  8889;
    protected $dbname = 'Learn_php';
    protected $socket = 'localhost:/Applications/MAMP/tmp/mysql/mysql.sock';
    protected $conn;
    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname, $this->port, $this->socket);
    }
    public function Query(){
       return  $this->conn->query('SELECT * FROM post');
    }
}

?>