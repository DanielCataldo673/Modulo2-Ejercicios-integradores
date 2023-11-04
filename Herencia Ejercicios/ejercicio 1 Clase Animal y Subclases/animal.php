<?php

class Animal {

    //declarando atributos
    public string $nombre;
    public int $edad;

    //Clase constructora
     public function __construct($nombre, $edad)
     {
        $this->nombre = $nombre;
        $this->edad = $edad;
     }


     //metodos 

     public function Informacion(){
        return "Informacion: " . " Nombre: " . $this->nombre . " Edad: " .  $this->edad;
     }


}



?>