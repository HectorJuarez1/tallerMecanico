<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NUEVA SUCURSAL</title>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <div class="center"><?php $this->showMessages(); ?></div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">NUEVA SUCURSAL</h1>
        </div>
    </div>
    <hr class="my-3 mb-1">
    <div class="row">

        <form class="row g-3" action="<?php echo constant('URL'); ?>nuevaSucursal/registrarSucursal" method="POST">
        <div class="col-md-6">
            <label>Proveedor</label>
            <select class="form-control" name="id_proS" required>
                <option selected>Abrir este menú de selección</option>
                <?php foreach ($this->marcas as $row) {
                    $marca = new varTodas();
                    $marca = $row; ?>
                    <option value="<?php echo $marca->proveedor_id; ?>">
                        <?php echo $marca->proveedor_nombre; ?></option>
                <?php } ?>
            </select></div>
            <div class="col-md-6">
            <label>Nombre Sucursal</label>
            <input type="text" class="form-control" name="NomSucursalS" required>
            </div>
            <div class="col-12">
            <label>Dirección</label>
            <input type="text" class="form-control" name="DireccionsS" required>
            </div>
            <div class="col-6">
            <label> Telefono 1</label>
            <input type="number" class="form-control" name="Telefono1S" required>
            </div>
            <div class="col-6">
            <label>Telefono 2</label>
            <input type="number" class="form-control" name="Telefono2S" required>
            </div>
            <div class="col-12">
            <label>Correo Electronico</label>
            <input type="email" class="form-control" name="CorreoEs" required>
            </div>
            <input class="btn btn-success" type="submit"value="Registrar">

        </form>
    </div>

    <?php require 'views/footer.php'; ?>
</body>

</html>