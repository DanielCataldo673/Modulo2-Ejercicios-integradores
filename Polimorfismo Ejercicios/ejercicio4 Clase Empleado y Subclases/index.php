<?php


require_once "funciones.php";
//instanciar las clases
//objetos

$empleado = new Empleado();

$gerente  = new Gerente();

$asistente = New Asistente();


realizarfuncionespersonas($gerente);
echo "<br>";
realizarfuncionespersonas($asistente);
echo "<br>";
realizarfuncionespersonas($empleado);






?>