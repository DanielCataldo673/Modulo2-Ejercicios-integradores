<?php

class Producto {

    //declarando atributos
    public string $nombre;
    public int $precio;

    //Clase constructora
     public function __construct($nombre, $precio)
     {
        $this->nombre = $nombre;
        $this->precio = $precio;
     }


     //metodos 

     public function Informacion(){
        return "Informacion: " . " Nombre: " . $this->nombre . ", Precio: " .  $this->precio;
     }


}



?>