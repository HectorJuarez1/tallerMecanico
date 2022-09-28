<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NuevaMarca</title>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <div class="center"><?php $this->showMessages(); ?></div>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">NUEVA MARCA</h1>
        </div>
    </div>
    <hr class="my-3 mb-1">
    <div class="row">
        <form class="row g-3" action="<?php echo constant('URL'); ?>nuevaMarca/registrarMarca" method="POST">
            <div class="col-12">
                <label>Nombre de la marca</label>
                <input type="text" class="form-control" name="NomMarca" required>
            </div>
            <input class="btn btn-success" type="submit" value="Registrar">

        </form>
    </div>
    <?php require 'views/footer.php'; ?>
</body>

</html>