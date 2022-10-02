<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NUEVA REFACCION</title>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">NUEVA REFACCION PROVEEDOR</h1>
        </div>
    </div>
    <hr class="my-3 mb-1">
    <div class="row">
        <form class="row g-3" action="<?php echo constant('URL'); ?>nuevaProveedorRefaccion/registraProveedorRefaccion" method="POST">
        <div class="col-md-6">
            <label>refaccion_id</label>
            <input type="text" class="form-control" name="refaccion_id" required  readonly value="<?php echo $this->varTodas->refaccion_id;   ?>">
        </div>
        <div class="col-md-6">
            <label>Proveedor</label>
            <select class="form-control" name="id_proveedor" required>
                <option selected>Abrir este menú de selección</option>
                <?php foreach ($this->provvedorCom as $row) {
                    $marca = new varTodas();
                    $marca = $row; ?>
                    <option value="<?php echo $marca->proveedor_id; ?>">
                        <?php echo $marca->proveedor_nombre; ?></option>
                <?php } ?>
            </select></div>
            <div class="col-6">
            <label>Fecha</label>
            <input type="date" class="form-control" name="Fecha" required>
            </div>
            <div class="col-6">
            <label>Precio</label>
            <input class="form-control" name="Precio" type="number" step="any" required>
            </div>
            <input class="btn btn-success" type="submit" value="Registrar">

        </form>

        <?php require 'views/footer.php'; ?>
</body>

</html>