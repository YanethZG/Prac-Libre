<?php

require_once(dirname(__FILE__) . "/../config/database.php");
require_once(dirname(__FILE__) . "/../models/Productos.php");

class ProductosController{
    private $db;
    private $producto;

    public function __construct(){
        $databasse = new Database();
        $this->$db = $databasse->getConnection();

        $this->producto = new Productos($this->$d);
    }

    //Metodo para mostrar la lista de productos
    public function index(){
        $result = $this->producto->get_productos();
        $producto = $result->fetchAll(PDO::FETCH_ASSOC);

        //LLmamamos la vista que muestra la lista de productos
        include(dirname(__FILE__) . '/..views/productos.php');
    }
    //Metodo para crear un nuevo usuario
    public function create(){
        if($_POST){
            //Asignamos los datos del formulario a las propiedades del usuario
            $this->producto->name = $_POST['name'];
            $this->producto->description = $_POST['description'];
            $this->producto->categorie = $_POST['categorie'];

            header("Location: index.php");
            return $this->producto->create();
        }
        //Incluimos la vista del formulario de creacion
        include(dirname(__FILE__) . '/../views/create.php');
    }
    //Metodo para editar producto
    public function edit($id){
        $this->producto->id = $id;
        $this->producto->get_product_by_id();

        if ($_POST){
            $this->producto->id =$id;
            $this->producto->name = $_POST['name'];
            $this->producto->description = $_POST['description'];
            $this->producto->categorie = $_POST['categorie'];

            header("LOcation: index.php");
            return $this->producto->update();

        }
        include(dirname(__FILE__) . '/../views/update.php');
    }
    //Metodo para eliminar producto
    public function delete($id){
        $this->producto->id = $id;
        header("Location: index.php");
        return $this->producto->delete();
    }
    //Metodo para manejar la actualizacion de registro
    public function edit($id) {
        $product = Product::getById($id);
        require '../views/products/edit.php';
    }
    
    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Product::update($id, $_POST);
            header('Location: index.php?action=index');
            exit;
        }
    }    
}