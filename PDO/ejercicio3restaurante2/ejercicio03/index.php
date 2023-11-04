<?php

require_once "classes/Conexion.php";

require_once "classes/Menu.php";

$miObjetoMenu = new Menu();
$menu = $miObjetoMenu->lista_completa();


?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="mt-3 ms-3 text-decoration-underline fst-italic text-center">Restaurante</h1>
    <div class="container">
        <div class="row">
            <?php foreach ($menu as $menus) { ?>
                <div class="col-3">
                    <div class="card mt-3" style="width: 18rem;">
                        <img height="250px" src="img/<?= $menus->getImagen();?>" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-text text-center text-decoration-underline fst-italic"><?= $menus->getTipo();?></h5>
                            <h5 class="card-title mt-3"><?= $menus->getProducto();?></h5>
                            <h5 class="card-text">$<?= $menus->getPrecio();?></h5>
                            
                        </div>
                    </div>

                </div>

            <?php } ?>

        </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>