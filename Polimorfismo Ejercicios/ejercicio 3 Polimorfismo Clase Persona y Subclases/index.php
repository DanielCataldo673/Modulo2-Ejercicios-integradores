<?php


require_once "acciones.php";
//instanciar las clases
//objetos

$persona = new Persona();


$estudiante  = new Estudiante();


$profesor = New Profesor();


realizaraccionpersonas($estudiante);
echo "<br>";
realizaraccionpersonas($profesor);
echo "<br>";
realizaraccionpersonas($persona);


?>
