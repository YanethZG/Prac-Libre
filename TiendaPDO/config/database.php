<?php

class Database{
    private $host = 'localhost';
    private $databasse = 'dbtiendapdo';
    private $user = 'root';
    private $password = '';
    public $conn;

    public function getConnection(): void{
        $this->conn= null;
        try{
            $this->conn = new PDO(
                dsn: 'mysql:host=' .$this->$host . "dbname=" .
                $this->database, username: $this->user, 
                password: $this->password);
        }catch (PDOException $e){
            echo "Error conection" .$e->getMessage();
            die();
        }
        return $this->conn;
    }
}


