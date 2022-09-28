<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar Productos</title>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <div class="center"><?php $this->showMessages(); ?></div>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">AGREGAR PRODUCTOS</h1>
        </div>
    </div>
    <div class="panel panel-success">
        <div class="panel-heading">
            Datos Existentes
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo constant('URL'); ?>nuevaCotizacion/AgregarProducto" method="POST">
                        <div class="form-group">
                        <div class="col-md-5">
                   
                            <input type="text" class="form-control" name="Codigo" required></div>
                            <div class="col-md-2">
                            <input class="btn btn-success" type="submit" value="Registrar"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <form action="<?php echo constant('URL'); ?>nuevaCotizacion" method="POST">
                    
        <input type="text" class="form-control" name="txtcodMarca" value="<?php echo $this->varTodas->marca_id; ?>" required><br>
        <input type="text" class="form-control" name="txtcodMarca" value="<?php echo $this->varTodas->refaccion_nombre; ?>" required><br>
        <input type="text" class="form-control" name="txtcodMarca" value="<?php echo $this->varTodas->refaccion_descripcion; ?>" required><br>
        <input type="text" class="form-control" name="txtcodMarca" value="<?php echo $this->varTodas->precio; ?>" required><br>
                   
    </form>
        <?php 
        echo $this->varTodas->marca_id .'<br>';
        echo $this->varTodas->refaccion_nombre.'<br>';
        echo $this->varTodas->refaccion_descripcion.'<br>';
        echo $this->varTodas->precio.'<br>';

    ?> 
        <?php require 'views/footer.php'; ?>
        <script src="<?php echo constant('URL'); ?>public/js/main.js"></script>
</body>

</html>