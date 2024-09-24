<body>
    <div class="container">
        <div class="card m-auto mt-5 p-4">
            <h2>Lista de productos</h2>
            <div class="row">
                <div class="col-md-3">
                    <a href="index.php?action=create" type="button" class="btn btn-success">Agregar</a>
</div>
<div class="row">
    <table class="table">
        <thead class="thead-dark">
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Categoria</th>
            <th scope="col">Opciones</th>
</thead>$_GET
<tbody>
    <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?= htmlspecialchars($producto['name']); ?></td>
            <td><?= htmlspecialchars($producto['description']); ?></td>
            <td><?= htmlspecialchars($producto['categorie']); ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $producto['id']?>">Editar</a>
                <a href="index.php?action=delete&id=<?= $producto['id']?>">Eliminar</a>
    </td>
    </tr>
    <?php endforeach; ?>
        </tbody>
     </table>
    </div>
</div>
    </div>
    </body>