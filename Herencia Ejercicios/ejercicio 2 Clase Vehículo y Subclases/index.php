<?php


require_once "coche.php";
require_once "bicicleta.php";



//Instanciar Clases Padre
$vehiculo = new Vehiculo("Fiat", "Uno");

echo $vehiculo->Informacion();

echo "<br>";
//Instanciar la clase hija

$coche  = new Coche("Ford", "Fiesta");

echo "<br>";

echo $coche->Acelerar();

echo "<br>";

$bicicleta = New Bicicleta("Trek", "Dual Sport");

echo "<br>";

echo $bicicleta->Pedalear();



?>