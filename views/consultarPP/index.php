<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>DETALES DE LA COTIZACION</title>
</head>

<body>
  <?php require 'views/header.php'; ?>
  <div class="center"><?php $this->showMessages(); ?></div>
  <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">DETALES DE LA COTIZACION</h1>
        </div>
    </div>
    <hr class="my-3 mb-5">
  <a class="btn btn-danger mb-2" href="<?php echo constant('URL') . 'consultarPP/DescargaPdf' ?>" role="button"><i class="fa fa-file-pdf"></i></a>
  <div class="card mb-4">
    <div class="card-header">
      <i class="fas fa-table me-1"></i>
      Registros
    </div>
 
    <div class="card-body">
      <table id="datatablesSimple">
        <thead>
          <tr>
          <th class="text-center">Refaccion</th>
                <th class="text-center">Cantidad</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Mano de Obra</th>
                <th class="text-center">Total Parcial</th>

          </tr>
        </thead>
        <tbody>
          <?php foreach ($this->varTodas as $row) {
            $marca = new varTodas();
            $marca = $row;
          ?>
            <tr>
              <td class="text-center"><?php echo $marca->vw_refaccion_nombre; ?></td>
              <td class="text-center"><?php echo $marca->vw_cantidad; ?></td>
              <td class="text-center"><?php echo $marca->vw_precio; ?></td>
              <td class="text-center"><?php echo $marca->vw_mano_obra; ?></td>
              <td class="text-center"><?php echo $marca->vw_totalParcial; ?></td>
              
            </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
  </div>

 

  <?php require 'views/footer.php'; ?>


</body>

</html>