<?php

require_once './controllers/ProductosController.php';

//Capturamos la opcion de a URL
$action = isset($_GET['action']) ? $_GET['action'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';

//Instanciamos el controlador
$controller = new ProductosController();

//Switch para manejar las direcciones basadas en el valor $action
switch ($action) {
    case 'create':
        $controller->create();
        break;
        case 'edit':
            if ($id){
                $controller->edit();
            }
            else{
                $controller->index();
            }
           break;
           case 'delete':
            if ($id){
                $controller->delete($id);
            }
            else{
                $controller->index();
            }
            break;
            default:
            $controller->index();
            break;
    
}
//Metodo para manejar las nuevas acciones de registro
if (method_exists($controller, $action)) {
    if ($action === 'show') {
        $id = $_GET['id'] ?? null;
        $controller->show($id);
    } elseif ($action === 'edit') {
        $id = $_GET['id'] ?? null;
        $controller->edit($id);
    } elseif ($action === 'update') {
        $id = $_GET['id'] ?? null;
        $controller->update($id);
    } else {
        $controller->$action();
    }
}
