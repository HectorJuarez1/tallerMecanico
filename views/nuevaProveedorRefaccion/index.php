<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>REFACCION PROVEEDOR</title>
</head>

<body>
  <?php require 'views/header.php'; ?>
  <div class="center"><?php $this->showMessages(); ?></div>
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">REFACCION - PROVEEDOR</h1>
    </div>
  </div><br>
  <div class="card mb-4">
    <div class="card-header">
      <i class="fas fa-table me-1"></i>
      Registros
    </div>
    <div class="card-body">
      <table id="datatablesSimple">
        <thead>
          <tr>
          <th class="text-center">REFACCIONES</th>
  
          </tr>
        </thead>

            <tbody>
              <?php foreach ($this->varTodas as $row) {
                $marca = new varTodas();
                $marca = $row;
                echo $marca->proveedor_id;
              ?>
                <tr>
                  <td class="text-center">
                    <a class="btn btn-success" href="<?php echo constant('URL') . 'nuevaProveedorRefaccion/verIdRefaccion/' . $marca->refaccion_id ?>" role="button"><?php echo $marca->refaccion_nombre; ?></a>
                  </td>
                <?php }?>
            </tbody>
            </table>
    </div>
  </div>



  <?php require 'views/footer.php'; ?>
</body>
</html>