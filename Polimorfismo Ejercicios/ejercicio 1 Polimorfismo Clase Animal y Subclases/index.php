<?php



require_once "utilidades.php";


//instanciar las clases
//objetos
$animal = new Animal();
$perro  = new Perro();
$gato = New Gato();


hacerSonidoAnimal($perro);
echo "<br>";

hacerSonidoAnimal($gato);

echo "<br>";

hacerSonidoAnimal($animal);


?>
