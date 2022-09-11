<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NuevaRefaccion</title>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <div class="center"><?php echo $this->mensaje; ?></div>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">NUEVA REFACCION</h1>
        </div>
    </div>

    <div class="row">
    <div class="col-lg-10"></div>
        <div class="col-lg-10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Datos Requeridos
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="<?php echo constant('URL'); ?>nuevaProveedorRefaccion/registraProveedorRefaccion" method="POST">
                                <div class="form-group">
                                <label>refaccion_id</label>
                                    <input type="text" class="form-control" name="refaccion_id" required  value="<?php echo $this->varTodas->refaccion_id; ?>"> <br>
                                    <label>id Proveedor</label>
                                    <input type="text" class="form-control" name="id_proveedor" required  value="<?php echo $this->varTodas->proveedor_id; ?>"><br>
                                    <label>Fecha</label>
                                    <input type="date" class="form-control" name="Fecha" required><br>
                                    <label>Precio</label>
                                    <input type="number" class="form-control" name="Precio" required><br>
                                    <input class="btn btn-success" type="submit"  onClick="AletRegistrar(1)" value="Registrar">
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