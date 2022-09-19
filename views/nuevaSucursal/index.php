<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NuevaSucursal</title>
</head>

<body>
<?php require 'views/header.php'; ?>
<div class="center"><?php $this->showMessages(); ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">NUEVA SUCURSAL</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10">
            <div class="panel panel-default">
                <div class="panel-heading"> Datos Requeridos</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="<?php echo constant('URL'); ?>nuevaSucursal/registrarSucursal" method="POST">
                                <div class="form-group">
                                    <label>Proveedor</label>
                                    <select class="form-control" name="id_proS" required>
                                        <option selected>Abrir este menú de selección</option>
                                        <?php foreach ($this->marcas as $row) {
                                            $marca = new varTodas();
                                            $marca = $row; ?>
                                            <option value="<?php echo $marca->proveedor_id; ?>">
                                                <?php echo $marca->proveedor_nombre; ?></option>
                                        <?php } ?>
                                    </select><br>
                                    <label>Nombre Sucursal</label>
                                    <input type="text" class="form-control" name="NomSucursalS" required><br>
                                    <label>Dirección</label>
                                    <input type="text" class="form-control" name="DireccionsS" required><br>
                                    <label> Telefono 1</label>
                                    <input type="number" class="form-control" name="Telefono1S" required><br>
                                    <label>Telefono 2</label>
                                    <input type="number" class="form-control" name="Telefono2S" required><br>
                                    <label>Correo Electronico</label>
                                    <input type="email" class="form-control" name="CorreoEs" required><br>
                                    <button class="btn btn-success" type="submit"  name="RegistrarSucursal">Registrar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'views/footer.php'; ?>
</body>

</html>