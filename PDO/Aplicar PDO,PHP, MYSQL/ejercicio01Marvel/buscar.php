<?php
require 'classes/Conexion.php';
require 'classes/Personajes.php';


//capturamos lo que viene por get
$keywords = isset($_GET['search']) ?$_GET['search'] : '';

//instanciamos el objeto 
$miObjetoPersonaje = new Personajes();
$personajes = $miObjetoPersonaje->buscarPersonajes($keywords);



?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SuperHeroes Marvel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
        <h1 class="text-center mb-5 text-decoration-underline fst-italic">Super Heroes de Marvel</h1>
        <div class="container">
            <div class="row">
                 <?php if(count($personajes )> 0) {  ?>
                <?php foreach($personajes as $personaje) {  ?>
                   <div class="col-3">
                        <div class="card mb-2 border-dark border-2" style="width: 18rem;">
                                <img  height="250px" src="img/<?= $personaje->getImagen(); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?= $personaje->getNombre(); ?></h5>
                                    <p class="card-text"><?= $personaje->recortar_palabras(); ?></p>
                                </div>
                                <div class="card-body">
                                <a href="heroes.php?id=<?= $personaje->getId(); ?>" class="btn btn-warning  w-100 fw-bold">VER MÁS</a>
                             </div>
                            </div>
                     </div>
                <?php }  ?>

                <?php } else { ?>
                        <h2>No hay Resultados</h2>
                <?php }  ?>


            </div>
        </div>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>