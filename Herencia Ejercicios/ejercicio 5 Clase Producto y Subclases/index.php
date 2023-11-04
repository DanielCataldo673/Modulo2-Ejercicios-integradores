<?php


require_once "electronico.php";
require_once "ropa.php";



//Instanciar Clases Padre
$producto = new Producto("Microondas", 160000);

echo $producto-> Informacion();

echo "<br>";
//Instanciar la clase hija

$electronico  = new Electronico("Televisión", 500000);

echo "<br>";

echo $electronico->calcular_Garantia();

echo "<br>";

$ropa = New Ropa("Pantalon", 30000);

echo "<br>";

echo $ropa->seleccionar_Talla();



?>