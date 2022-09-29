<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ActMarca</title>
</head>
<body>
    <?php require 'views/header.php'; ?>
    <div class="center"><?php $this->showMessages(); ?></div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ACTUALIZAR MARCA</h1>
        </div>
    </div>
    <hr class="my-3 mb-1">
    <div class="row">
        <form class="row g-3" action="<?php echo constant('URL'); ?>consultarMarca/actualizarMarca" method="POST">
            <div class="col-md-6">
                <label>Codigo Marca</label>
                <input type="text" class="form-control" name="codMarca" value="<?php echo $this->varTodas->marca_id; ?>" required><br>
            </div>
            <div class="col-md-6">
                <label>Nombre de la marca</label>
                <input type="text" class="form-control" name="NomMarca" value="<?php echo $this->varTodas->marca_nombre; ?>" required><br>
            </div>
            <input class="btn btn-warning" type="submit" value="Actualizar Datos">
        </form>
    </div>
    <?php require 'views/footer.php'; ?>
</body>

</html>