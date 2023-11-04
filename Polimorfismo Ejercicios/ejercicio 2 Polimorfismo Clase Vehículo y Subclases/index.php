<?php


require_once "acciones.php";


//instanciar las clases
//objetos


$vehiculo = new Vehiculo();

$coche  = new Coche();

$bicicleta = New Bicicleta();


realizaraccionvehiculos($vehiculo);
echo "<br>";

realizaraccionvehiculos($coche);

echo "<br>";

realizaraccionvehiculos($bicicleta);


?>