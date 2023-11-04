<?php


require_once "perro.php";
require_once "gato.php";



//Instanciar Clases Padre
$animal = new Animal("Pepito", 8);

echo $animal-> Informacion();

echo "<br>";
//Instanciar la clase hija

$perro  = new Perro("Wally", 4);

echo "<br>";

echo $perro->Ladrar();

$gato = New Gato("Max", 2);

echo "<br>";

echo $gato->Maulla();



?>