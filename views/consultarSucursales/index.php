<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>CONSULTA SUCURSALES</title>
</head>

<body>
  <?php require 'views/header.php'; ?>

  <h1>SECCIÓN DE CONSULTA</h1>
  <hr class="my-4">
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
                <th class="text-center">Direccion</th>
                <th class="text-center">Telefono 1</th>
                <th class="text-center">Telefono 2</th>
                <th class="text-center">Correo</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($this->varTodas as $row) {
                $datosd = new varTodas();
                $datosd = $row;
              ?>
                <tr>
                  <td class="text-center"><?php echo $datosd->sucursal_nombre; ?></td>
                  <td class="text-center"><?php echo $datosd->sucursal_direccion; ?></td>
                  <td class="text-center"><?php echo $datosd->sucursal_telefono; ?></td>
                  <td class="text-center"><?php echo $datosd->sucursal_telefono_2; ?></td>
                  <td class="text-center"><?php echo $datosd->sucursal_correo; ?></td>
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