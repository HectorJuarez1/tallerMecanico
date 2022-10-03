<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>

<body>

    <?php require 'views/header.php'; ?>



    <div id="main">
        <h1 class="center">Bienvenido
        </h1>
        <br>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body"># DE REFACCIONES COTIZADAS</div>
                    <div class="d-flex justify-content-center">
                        <h1>
                            <?php foreach ($this->varTodas as $row) {
                                $r = new varTodas();
                                $r = $row; ?>
                                <?php echo $r->Rcotizadas; ?>
                            <?php } ?>
                        </h1>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">$ DINERO</div>
                    <div class="d-flex justify-content-center">
                        <h1>
                            <?php foreach ($this->varTodas as $row) {
                                $r = new varTodas();
                                $r = $row; ?>
                                <?php echo $r->Tparcial;
                                ?>
                            <?php } ?>
                        </h1>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <?php require 'views/footer.php'; ?>

</body>

</html>