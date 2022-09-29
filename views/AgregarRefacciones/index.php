<?php
session_start();
$numerodp = $_SESSION['Num_Pedido'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>AgregarRefaccione</title>
</head>

<body>
  <?php require 'views/header.php'; ?>
  <div class="center"><?php $this->showMessages(); ?></div>
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">AgregarRefaccione</h1>
    </div>
  </div>
  <br>

  <?php echo '<br>' . $numerodp; ?>


  <hr class="my-3 mb-1">
  <div class="row">
    <form class="row g-3" action="<?php echo constant('URL'); ?>AgregarRefacciones/Buscar" method="POST">
      <label>Codigo Refaccion</label>
      <div class="col-md-3">
        <input type="text" class="form-control" name="Codigo" required>
      </div>
      <div class="col-md-2">
        <input class="btn btn-primary" type="submit" value="Buscar">
      </div>
  </div>
  </form>
  <?php $ruta = "../public/img/Refacciones/" . $this->varTodas->refaccion_imagen; ?>
  <br>


  <div class="card mb-3" style="max-width: 740px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="<?php echo $ruta; ?>" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">Codigo : <?php echo " " . $this->varTodas->marca_id; ?></h5>
          <p class="card-text">Nombre : <?php echo " " . $this->varTodas->refaccion_nombre; ?></p>
          <p class="card-text"><?php echo " " . $this->varTodas->refaccion_descripcion; ?></p>
          <p class="card-title">$ <?php echo number_format($this->varTodas->precio, 2, '.', ','); ?></p>
          <form class="row g-2" action="<?php echo constant('URL'); ?>AgregarRefacciones/registrarRefacciones" method="POST">
            <div class="container">
              <div class="row">
                <div class="col">
                  <label>Cantidad</label>
                  <input type="text" class="form-control" name="txt_cantidad_R" required>
                </div>
                <div class="col">
                  <label>Mano de Obra</label>

                  <input type="text" class="form-control" name="txt_mano_obra" required>
                </div>
                <div class="col"><br>
                  <input class="btn btn-success" type="submit" value="+">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php require 'views/footer.php'; ?>


</body>

</html>