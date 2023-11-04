<?php


require_once "metodos.php";

//instanciar las clases
//objetos

$producto = new Producto();

$electronico  = new Electronico();

$ropa = New Ropa();

realizarmetodosproductos($electronico);
echo "<br>";
realizarmetodosproductos($ropa);
echo "<br>";
realizarmetodosproductos($producto);



?>