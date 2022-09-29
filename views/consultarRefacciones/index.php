<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Marcas</title>
</head>

<body>
  <?php require 'views/header.php'; ?>

  <h1>SECCIÓN DE CONSULTA</h1>
  <hr class="my-4">
  <div class="center">
  <div class="card mb-4">
    <div class="card-header">
      <i class="fas fa-table me-1"></i>
      Registros
    </div>
 
    <div class="card-body">
      <table id="datatablesSimple">


            <thead>
              <tr>
                <th class="text-center">Nombre</th>
                <th class="text-center">Descripcion</th>
                <th class="text-center">Imagen</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($this->varTodas as $row) {

                $marca = new varTodas();
                $marca = $row;
                $ruta = "public/img/Refacciones/" . $marca->refaccion_imagen;
              ?>
                <tr>
                  <td class="text-center"><?php echo $marca->refaccion_nombre; ?></td>
                  <td class="text-center"><?php echo $marca->refaccion_descripcion; ?></td>
                  <td class="text-center"> <a href="<?php echo $ruta; ?>" target="_blank"><img src="<?php echo $ruta; ?>" class="img-thumbnail" > </a></td>
                </tr>
              <?php }
              ?>
            </tbody>
            </table>
    </div>
  </div>

  
  <?php require 'views/footer.php'; ?>
</body>

</html>