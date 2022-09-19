<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>NuevoProveedor</title>
</head>
<body>
    <?php require 'views/header.php'; ?>
    <div class="center"><?php $this->showMessages(); ?></div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">NUEVO PROVEEDOR</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Datos Requeridos
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="<?php echo constant('URL'); ?>nuevoProveedor/registrarProveedor" method="POST">
                                <div class="form-group">
                                    <label>Nombre del Proveedor</label>
                                    <input type="text" class="form-control" name="Nomproveedor" required><br>
                                    <label>Dirección</label>
                                    <input type="text" class="form-control" name="Direccion" required><br>
                                    <label> Telefono 1</label>
                                    <input type="number" class="form-control" name="Telefono1" required><br>
                                    <label>Telefono 2</label>
                                    <input type="number" class="form-control" name="Telefono2" required><br>
                                    <label>Correo Electronico</label>
                                    <input type="email" class="form-control" name="CorreoE" required><br>
                                    <input class="btn btn-success" type="submit"  value="Registrar">
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