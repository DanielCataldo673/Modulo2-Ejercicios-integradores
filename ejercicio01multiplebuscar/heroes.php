<?PHP
    require_once "classes/Conexion.php";
    require_once "classes/Personajes.php";

$id = $_GET['id'] ?? FALSE;
$miObjetoHeroe = new Personajes();
$superheroe = $miObjetoHeroe ->superheroe_x_id($id);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SuperHeroes DC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

<div class="row">
<?PHP if (isset($superheroe)) { ?>
    <h1 class="text-center my-5"> <?= $superheroe->getNombre() ?></h1>
    <div class="col  d-flex flex-column justify-content-center align-items-center">
    <div class="card mb-3" style="max-width: 640px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="img/<?=$superheroe->getImagen() ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $superheroe->getNombre() ?></h5>
                    <p class="card-text"><?= $superheroe->getDescripcion() ?></p>
                    <p class="card-text"><small class="text-body-secondary">Peleas ganadas :<?= $superheroe->getPeleas_ganadas() ?></small></p>
                </div>
                </div>
            </div>
            </div>

         </div>




<?PHP }else{ ?>
    <div class="col">
    <h2 class="text-center m-5">no hay resultados.</h2>
</div>
<?PHP } ?>



</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>