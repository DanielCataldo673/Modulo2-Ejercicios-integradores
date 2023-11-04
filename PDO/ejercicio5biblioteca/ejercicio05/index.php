<?php

require_once "classes/Conexion.php";

require_once "classes/Libros.php";

require_once "classes/Socios.php";


$miObjetoLibros = new Libros();
$libros = $miObjetoLibros->lista_completa();

$miObjetoSocios = new Socios();
$socios = $miObjetoSocios->lista_completa();



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
    <div class="container">
        <h2 class="text-center text-decoration-underline fst-italic mt-3">Datos de los Libros</h2>
        <div class="row mt-3">


            <table class="table table-success table-striped">
                <tr>
                    <th>Titulo </th>
                    <th>Autor</th>
                    <th>Genero </th>
                </tr>
                <?php foreach ($libros as $libro) {  ?>
                    <tr>
                        <td><?= $libro->getTitulo(); ?></td>
                        <td><?= $libro->getAutor(); ?></td>
                        <td><?= $libro->getGenero(); ?></td>
                    </tr>

                <?php } ?>

            </table>

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
        <h2 class="text-center text-decoration-underline fst-italic mt-3">Datos de los Socios</h2>
        <div class="row mt-3">


            <table class="table table-warning table-striped">
                <tr>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Telefono </th>
                </tr>
                <?php foreach ($socios as $socio) {  ?>
                    <tr>
                        <td><?= $socio->getNombre(); ?></td>
                        <td><?= $socio->getDireccion(); ?></td>
                        <td><?= $socio->getTelefono(); ?></td>
                    </tr>

                <?php } ?>

            </table>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>

