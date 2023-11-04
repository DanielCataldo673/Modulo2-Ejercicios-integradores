<?PHP
require_once "classes/Conexion.php";
require_once "classes/autos_Usados.php";

$id = $_GET['id'] ?? FALSE;
$miObjetoAutos = new AutosUsados();
$autos = $miObjetoAutos->autos_x_id($id);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Autos Usados</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <div class="row">
    <?PHP if (isset($autos)) { ?>
      <h1 class="text-center my-5 text-decoration-underline fst-italic"> <?= $autos->getMarca() ?></h1>
      <div class="col  d-flex flex-column justify-content-center align-items-center">
        <div class="card mb-3 border-dark border-2" style="max-width: 640px">
          <div class="row g-5">
            <div class="col-md-4">
              <img src="img/<?= $autos->getImagen() ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title text-decoration-underline fst-italic text-center"><?= $autos->getMarca() ?></h5>
                <p class="card-text mt-4"><strong class="text-body-secondary text-decoration-underline fst-italic">Modelo </strong> : <?= $autos->getModelo() ?></p>
                <p class="card-text"><strong class="text-body-secondary text-decoration-underline fst-italic">Año de Fabricación </strong> : <?= $autos->getAnio_fabricacion() ?></p>
                <p class="card-text"><strong class="text-body-secondary text-decoration-underline fst-italic">Color </strong> : <?= $autos->getColor() ?></p>
                <p class="card-text"><strong class="text-body-secondary text-decoration-underline fst-italic">Tipo de carroceria </strong> : <?= $autos->getTipo_carroceria() ?></p>
                <p class="card-text"><strong class="text-body-secondary text-decoration-underline fst-italic">Numero de Puertas </strong> : <?= $autos->getNumero_puertas() ?></p>
                <p class="card-text"><strong class="text-body-secondary text-decoration-underline fst-italic">Numero de Asientos </strong> : <?= $autos->getNumero_asientos() ?></p>
                <p class="card-text"><strong class="text-body-secondary text-decoration-underline fst-italic">Tipo de combustible </strong> : <?= $autos->getTipo_combustible() ?></p>
                <p class="card-text"><strong class="text-body-secondary text-decoration-underline fst-italic">Transmición </strong> : <?= $autos->getTransmicion() ?></p>
                <p class="card-text"><strong class="text-body-secondary text-decoration-underline fst-italic">Motor </strong> : <?= $autos->getMotor() ?></p>
                <p class="card-text"><strong class="text-body-secondary text-decoration-underline fst-italic">kilometraje </strong> : <?= $autos->getKilometraje() ?></p>
                <p class="card-text"><strong class="text-body-secondary text-decoration-underline fst-italic">Historial de Mantenimiento </strong> : <?= $autos->getHistorial_mantenimiento() ?></p>
                <p class="card-text"><strong class="text-body-secondary text-decoration-underline fst-italic">Propietario Actual </strong> : <?= $autos->getPropietario_actual() ?></p>
                <p class="card-text"><strong class="text-body-secondary text-decoration-underline fst-italic">Precio </strong> : <?= $autos->getPrecio() ?></p>
                <p class="card-text"><strong class="text-body-secondary text-decoration-underline fst-italic">Estado </strong> : <?= $autos->getEstado() ?></p>
                <p class="card-text"><strong class="text-body-secondary text-decoration-underline fst-italic">Fecha de Registro </strong> : <?= $autos->getFecha_registro() ?></p>
              </div>
            </div>
          </div>
        </div>

      </div>




    <?PHP } else { ?>
      <div class="col">
        <h2 class="text-center m-5">no hay resultados.</h2>
      </div>
    <?PHP } ?>



  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>