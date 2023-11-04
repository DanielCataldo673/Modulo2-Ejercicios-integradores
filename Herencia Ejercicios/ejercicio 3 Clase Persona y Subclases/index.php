<?php


require_once "estudiante.php";
require_once "profesor.php";



//Instanciar Clases Padre
$persona = new Persona("Pedro", 16);

echo $persona-> Informacion();

echo "<br>";
//Instanciar la clase hija

$estudiante  = new Estudiante("Felipe", 75);

echo "<br>";

echo $estudiante->Estudiar();

echo "<br>";

$profesor = New Profesor("Sandra", 37);

echo "<br>";

echo $profesor->Enseñar();



?>