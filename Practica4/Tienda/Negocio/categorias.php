<?php

require_once 'Datos/conf.php';

class Categorias extends Conf{

    //listamos todas las categorias existentes

    public function list_categories(){
        $query = "SELECT * FROM categorias";
        return msqli_fetch_all($this->exec_query($query), MYSQLI_ASSOC);
    }
}