<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cotizacion</title>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <div class="row">
        <div class="col-lg-12">
        <div class="center"><?php echo $this->mensaje; ?>
    </div>
            <h1 class="page-header"><i class="fa fa-newspaper-o"></i> NUEVA COTIZACION</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-10">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Datos Requeridos
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="<?php echo constant('URL'); ?>nuevaCotizacion/registrarCotizacion" method="POST">
                                <div class="form-group">
                                    <label>Nombre del Cliente</label>
                                    <input type="text" class="form-control" name="NomCliente" required><br>
                                    <label>Descripcion Coche</label>
                                    <input type="text" class="form-control" name="Descripcion_coche" required><br>
                                    <label>Fecha</label>
                                    <input type="date" class="form-control" name="Fecha" required><br>
                                    <label>Costo Total</label>
                                    <input type="number" class="form-control" name="CostoTotal" required><br>
                                    <input class="btn btn-success" type="submit" value="Registrar">
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