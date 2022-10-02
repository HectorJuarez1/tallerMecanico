<?php
session_start();
$numerodp = $_SESSION['Num_Pedido'];
$d = "";
$a = "";
$t = "";
$s = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AGREGAR REFACCIONES</title>
</head>

<body>
  <?php require 'views/header.php'; ?>
  <div class="center"><?php $this->showMessages(); ?></div>
  <div class="row">
    <div class="col-lg-12">
      <h2 class="page-header">AGREGAR REFACCIONES <?php echo "#" . $numerodp; ?></h2>
    </div>
  </div>
  <hr class="my-3 mb-1">
  <div class="row">

    <form class="row g-3" action="<?php echo constant('URL'); ?>ConsultarBB/Buscar" method="POST">

      <div class="input-group mb-4">
        <input type="text" class="form-control" placeholder="Codigo Refaccion" name="Codigo" required>
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
      </div>

    </form>
    <?PHP
    if (isset($_POST['Codigo'])) {
      $ruta = "../public/img/Refacciones/" . $this->varTodas->refaccion_imagen;
      $d = $this->varTodas->marca_id;
      $a = $this->varTodas->refaccion_nombre;
      $t = $this->varTodas->refaccion_descripcion;
      $s = $this->varTodas->precio;
    }
    ?>
    <div class="card mb-4" style="max-width: 1150px;">
      <div class="row g-0">
        <div class="col-md-3">
          <img src="<?php echo $ruta; ?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <form class="row g-2" action="<?php echo constant('URL'); ?>AgregarRefacciones/registrarRefacciones" method="POST">
              <input type="hidden" class="form-control" name="txt_id_marca" readonly value="<?php echo " " . $d; ?>">
              <p class="card-text">Nombre : <?php echo $a; ?></p>
              <p class="card-text"><?php echo " " .  $t; ?></p>
              <p class="card-title">$ <?php echo number_format($s, 2, '.', ','); ?></p>
              <div class="container">
                <div class="row">
                  <div class="col-5">
                    <label>Cantidad</label>
                    <input type="number" class="form-control" name="txt_cantidad_R" required>
                  </div>
                  <div class="col-5">
                    <label>Mano de Obra</label>
                    <input type="number" class="form-control" name="txt_mano_obra" required>
                  </div>
                  <div class="col-2"><br>
                    <input class="btn btn-success" type="submit" value="+">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <br>
    <a href="<?php echo constant('URL') . 'consultarPP' ?>" class="btn btn-warning"></i>Detalle Pedido</a>
  </div>
  <?php require 'views/footer.php'; ?>
</body>
</html>