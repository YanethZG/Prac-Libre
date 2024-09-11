<?php

Class Conf{
    private $server;

    private $user;

    private $password;

    private $database;

    private $connection;

    private $result_query;

   public function __construct(){
       $this->server = "127.0.0.1"; 
       $this->user = "root";
       $this->password = "";
       $this->database = "dbtienda";
   }

   //funcion que nos permite conectarnos al servidor y a su vez a la base de datos

   protected function connect(){
       @$this->connection = mysqli_connect(
        $this->server,
        $this->user,
        $this->password, 
        $this->database)
        or die("error" . mysqli_connect_error());
        return $this->connection;
   }

   //funcion para cerrar ejecutar las consultas
   public function disconnect(){
       return mysqli_close($this->connection);
   }

   //funcion para ejecutar las consutas
   public function query($query){
       $this->result_query = mysqli_query($this->connect(), $query)
       or die("error" . mysqli_error($this->connection));
   }
}