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
  <div class="center"><?php echo $this->mensaje; ?></div>
  <?php //var_dump($this->marcas);
  ?>

  <div class="col-lg-12">
    <div class="panel panel-success">
      <div class="panel-heading">
        Datos Existentes
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th class="text-center">Codigo Marca</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($this->varTodas as $row) {
                $marca = new varTodas();
                $marca = $row;
              ?>
                <tr>
                  <td class="text-center"><?php echo $marca->marca_id; ?></td>
                  <td class="text-center"><?php echo $marca->marca_nombre; ?></td>
                  <td class="text-center"><a href="<?php echo constant('URL') . 'consultarMarca/verMarca/' . $marca->marca_id ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a><a href="<?php echo constant('URL') . 'consultarMarca/eliminarMarca/' . $marca->marca_id ?>" class="btn btn-danger"><i class="fa  fa-trash-o"></i></a></td>
                </tr>
              <?php }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


















  <?php require 'views/footer.php'; ?>
  <script src="<?php echo constant('URL'); ?>public/js/main.js"></script>

</body>

</html>