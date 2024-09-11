<?php

//Importamos los archivos con las clases
require_once 'Negocio/categorias.php';
require_once 'Negocio/productos.php';

//Instanciamos las clases
$productos = new Productos();
$categorias = new Categorias();

?>

<div class= "card m-auto mt-5 p-3" style="width: 800px">
<h3>
    <button type= "button"  class="btn btn-success" onClick="location.replace('index.php?mod=&form=ad')">
    <i class="bi bi-plus-circle me-1"></i>agregar
</button>
</h3>
<table class="table">
    <thead class= "thead-dark">
        <tr>
            <th scope="col">Producto</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Categoria</th>
            <th scope="col">Controles</th>
</tr>
</thead>
<tbody>
    <?php
    foreach ($productos->list_products() as $prod) {
        //obtener la categoria
        foreach ($categorias->get_categoria($prod['id_categoria']) as $cat){}
        ?>
        <tr>
            <td><?= $prod['name']; ?></td>
            <td><?= $prod['description']; ?></td>
            <td><?= $prod['name']; ?></td>
            <td>
                <button type="button" onclick="editar(<?= $prod['id']; ?>);" class="btn btn-info">
                     <i class="bi bi-pencil"></i>
                </button>
                <button type="button" onclick="eliminar(<?= $prod['id']; ?>);" class="btn btn-danger">
                     <i class="bi bi-trash"></i>
                </button>    
    </td>
    </tr>
    <?php 
    }
    ?>
    </tbody>
</table>
</div>

<script>
    function editar(id) {
        document.location.replace('index.php?mod=&form=up&id=' + id);
    }
    function eliminar(id) {
        document.location.replace('index.php?mode=&form=del&id=' + id);
    }
    </script>

