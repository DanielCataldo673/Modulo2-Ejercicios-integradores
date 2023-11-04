<?php
require 'classes/Conexion.php';
require 'classes/autos_Usados.php';


//capturamos lo que viene por get
$keywords = isset($_GET['search']) ?$_GET['search'] : '';

//instanciamos el objeto 
$miObjetoAutos = new AutosUsados();
$autos = $miObjetoAutos->buscarAutos($keywords);



?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consecionario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
        <h1 class="text-center mb-5 text-decoration-underline fst-italic">Autos Usados</h1>
        <div class="container">
            <div class="row">
                 <?php if(count($autos )> 0) {  ?>
                <?php foreach($autos as $auto) {  ?>
                   <div class="col-3">
                        <div class="card mb-2" style="width: 18rem;">
                                <img height="250px" src="img/<?= $auto->getImagen(); ?>" class="card-img-top" alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?= $auto->getMarca(); ?></h5>
                                </div>
                                <div class="card-body">
                                <a href="autos.php?id=<?= $auto->getId(); ?>" class="btn btn-warning w-100 fw-bold">VER MÁS</a>
                             </div>
                           
                     </div>
                     </div>
                <?php }  ?>
                </div>
                <?php } else { ?>
                        <h2>No hay Resultados</h2>
                <?php }  ?>


            
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>