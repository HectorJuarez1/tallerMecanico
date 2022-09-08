<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Refaccion - Proveedor</title>
</head>

<body>
  <?php require 'views/header.php'; ?>
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">REFACCION - PROVEEDOR</h1>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Datos Existentes
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th class="text-center">REFACCIONE</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($this->varTodas as $row) {
                $marca = new varTodas();
                $marca = $row;
              ?>
                <tr>
                  <td class="text-center">
                    <a class="btn btn-success" href="<?php echo constant('URL') . 'nuevaProveedorRefaccion/verIdRefaccion/' . $marca->refaccion_id ?>" role="button"><?php echo $marca->refaccion_nombre; ?></a>
                  </td>
                <?php }
                ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php require 'views/footer.php'; ?>
</body>
</html>