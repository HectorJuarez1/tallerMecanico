<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NUEVA REFACCION</title>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">NUEVA REFACCION</h1>
        </div>
    </div>
    <hr class="my-3 mb-1">
    <div class="row">
        <form class="row g-3" action="<?php echo constant('URL'); ?>nuevaRefaccion/registraRefaccion" method="POST" enctype="multipart/form-data" accept=".png, .jpg, .jpeg, .webp">
            <input type="hidden" class="form-control" name="id_marca" required value="<?php echo $this->varTodas->marca_id; ?>">
            <div class="col-md-6">
                <label>Marca de Auto</label>
                <input type="text" class="form-control" name="NomMarca" required disabled value="<?php echo $this->varTodas->marca_nombre; ?>">
            </div>
            <div class="col-md-6">
                <label>Nombre Refaccion</label>
                <input type="text" class="form-control" name="NomRefaccion" required>
            </div>
            <div class="col-12">
                <label>Descripcion</label>
                <input type="text" class="form-control" name="Descripcion" required>
            </div>
            <div class="col-4">
                <label>Precio</label>
                <input type="number" class="form-control" name="Precio" required>
            </div>
            <div class="col-8">
                <label>Imagen</label>
                <input type="file" class="form-control" name="filename" required>
            </div>
            <input class="btn btn-success" type="submit" value="Registrar">
        </form>
    </div>
    <?php require 'views/footer.php'; ?>
</body>

</html>