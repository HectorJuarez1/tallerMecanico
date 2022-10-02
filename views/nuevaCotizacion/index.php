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
    <div class="center"><?php $this->showMessages(); ?></div>
    <?php



    ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><i class="fa fa-calculator"></i> NUEVA COTIZACION</h1>
        </div>
    </div>
    <hr class="my-3 mb-1">
    <div class="row">
        <form class="row g-3" action="<?php echo constant('URL'); ?>nuevaCotizacion/registrarCotizacion" method="POST">

        <div class="col-md-3">
                <label class="form-label">#</label>
                <input type="number" class="form-control" name="txt_NUM_cotizacion" readonly value="<?php echo rand(10001, 20001); ?>" >
            </div>
            <div class="col-md-3">
                <label class="form-label">Fecha</label>
                <input type="date" class="form-control" name="Fecha">
            </div>
            <div class="col-md-6">
                <label class="form-label">Nombre Cliente</label>
                <input type="text" class="form-control" name="txt_NombreCliente" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Telefono</label>
                <input type="number" class="form-control" name="txt_Telefono" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" name="txt_Correo" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Marca</label>
                <select class="form-control" name="cbx_Marca" required>
                    <option selected>Abrir este menú de selección</option>
                    <?php foreach ($this->varTodas as $row) {
                        $marca = new varTodas();
                        $marca = $row; ?>
                        <option value="<?php echo $marca->marca_id; ?>">
                            <?php echo $marca->marca_nombre; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label">Modelo</label>
                <input type="text" class="form-control" name="txt_Modelo" required>
            </div>
            <div class="col-md-4">
                <label class="form-label">Año</label>
                <input type="number" class="form-control" name="txt_Anio">
            </div>

            <div class="col-12">
                <label class="form-label">Descripcion del Auto</label>
                <input type="text" class="form-control" name="txt_DescripcionAuto" required>
            </div>

            <input class="btn btn-success" type="submit" value="Siguiente">


        </form>
    </div>        
        <?php require 'views/footer.php'; ?>
</body>

</html>