<?php

require_once "classes/Conexion.php";

require_once "classes/Frutas.php";

require_once "classes/Productores.php";


$miObjetoFrutas = new Frutas();
$frutas = $miObjetoFrutas->lista_completa();

$miObjetoProductores = new Productores();
$productores = $miObjetoProductores->lista_completa();



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
    <h1 class="mt-3 ms-3 text-decoration-underline fst-italic text-center">Top 10 de Frutas consumidas en Argentina</h1>
    <div class="container">
        <div class="row mt-3">
            <?php foreach ($frutas as $fruta) { ?>
                <div class="col-4">
                    <div class="card mt-3" style="width: 18rem;">
                        <img height="250px" src="img/<?= $fruta->getImagen();?>" class="card-img-top" alt="...">
                        <div class="card-body ms-3">
                        
                            <h5 class="card-title mt-3 text-decoration-underline fst-italic text-center"><?= $fruta->getNombre();?></h5>
                            <p class="card-text"><?= $fruta->getDescripcion();?></p>
                            
                        </div>
                    </div>

                </div>

            <?php } ?>

        </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>


<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="text-center text-decoration-underline fst-italic mt-5">Datos de Producción y consumo</h2>
        <div class="row mt-3">


            <table class="table table-danger table-striped">
                <tr>
                    <th>Productor</th>
                    <th>Epoca de Cosecha</th>
                    <th>Consumo por Persona </th>
                </tr>
                <?php foreach ($productores as $productor) {  ?>
                    <tr>
                        <td><?= $productor->getProductor(); ?></td>
                        <td><?= $productor->getEpoca_cosecha(); ?></td>
                        <td><?= $productor->getConsumo_persona(); ?></td>
                    </tr>

                <?php } ?>

            </table>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>