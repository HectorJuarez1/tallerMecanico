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
                            <form action="<?php echo constant('URL'); ?>nuevaRefaccion/registraRefaccion" method="POST" enctype="multipart/form-data" accept=".png, .jpg, .jpeg, .webp">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="id_marca" required value="<?php echo $this->varTodas->marca_id; ?>"> <br>
                                    <label>Marca de Auto</label>
                                    <input type="text" class="form-control" name="NomMarca" required disabled value="<?php echo $this->varTodas->marca_nombre; ?>"><br>
                                    <label>Nombre Refaccion</label>
                                    <input type="text" class="form-control" name="NomRefaccion" required><br>
                                    <label>Descripcion</label>
                                    <input type="text" class="form-control" name="Descripcion" required><br>
                                    <label>Imagen</label>
                                    <input type="file" class="form-control"  name="filename" required>
                                    <br>
                                    <input class="btn btn-success" type="submit" onClick="AletRegistrar(1)" value="Registrar">
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