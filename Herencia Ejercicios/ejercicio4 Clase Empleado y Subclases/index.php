<?php


require_once "gerente.php";
require_once "asistente.php";



//Instanciar Clases Padre
$empleado = new Empleado("Juan", 160000);

echo $empleado-> Informacion();

echo "<br>";
//Instanciar la clase hija

$gerente  = new Gerente("Francisca", 500000);

echo "<br>";

echo $gerente->Gestionar();

echo "<br>";

$asistente = New Asistente("Maria", 300000);

echo "<br>";

echo $asistente->Asistir();



?>