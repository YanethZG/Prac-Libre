<?php include '../views/layout/main.php'; ?>
<h1>Editar Producto</h1>
<form action="index.php?action=update&id=<?= $product['id'] ?>" method="post">
    <label for="name">Nombre:</label>
    <input type="text" name="name" id="name" value="<?= htmlspecialchars($product['name']) ?>" required>
    
    <label for="price">Categoria:</label>
    <input type="text" name="categorie" id="price" value="<?= htmlspecialchars($product['categorie']) ?>" required>
    
    <label for="description">Descripción:</label>
    <textarea name="description" id="description" required><?= htmlspecialchars($product['description']) ?></textarea>
    
    <button type="submit">Actualizar</button>
    <a href="index.php">Cancelar</a>
</form>
