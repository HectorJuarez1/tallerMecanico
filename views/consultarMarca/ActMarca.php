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
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ACTUALIZAR MARCA</h1>
            <div class="center"><?php echo $this->mensaje; ?></div>
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
                            <form action="<?php echo constant('URL'); ?>consultarMarca/actualizarMarca" method="POST">
                                <div class="form-group">
                                <label>Codigo Marca</label>
                                    <input type="text" class="form-control" name="codMarca" value="<?php echo $this->varTodas->marca_id; ?>" required><br>
                                    <label>Nombre de la marca</label>
                                    <input type="text" class="form-control" name="NomMarca" value="<?php echo $this->varTodas->marca_nombre; ?>" required><br>
                                    <input class="btn btn-warning" type="submit"   value="Actualizar Datos">
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