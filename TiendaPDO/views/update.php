<body>
    <div class="container">
        <form action="" method="post">
            <div class="row mt-5">
                <div class="c0l-md-3">
                    <label for="">Nombre:</label>
                    <input type="text" name="name" value="<?= htmlspecialchars($this->producto->name) ?>"
                    class="form-control">
</div>
<div class="com-md-3">
    <label for="">Categoria:</label>
    <input type="text" name="categorie" value="<?= htmlspecialchars($this->producto->categorie) ?>"
    class="form-control">
</div>
</div>
<div class="row">
<div class="com-md-6">
    <label for="">Descripcion:</label>
    <textarea  name="description" id="" class="form-control"><?= htmlspecialchars($this->producto->description) ?></textarea>"
</div>
</div>
<div class="row mt-3">
    <div class="col-md-3">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="index.php" class="btn btn-danger">Cancelar</a>
</div>
</div>
</form>
</div>
</body>