<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <div class="d-flex align-items-center justify-content-center">
            <div class="text-center"><br>
                <h1 class="display-1 fw-bold">404</h1>
                <p class="fs-3"> <span class="text-danger">Opps!</span>  Página no encontrada.</p>
                <p class="lead">
                La página que buscas no existe.
                  </p>
                <a href="<?php echo constant('URL'); ?>main" class="btn btn-primary">Go Home</a>
            </div>
        </div>

    <?php require 'views/footer.php'; ?>
</body>

</html>