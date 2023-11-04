<?php

class Vehiculo {

    //declarando atributos
    public string $marca;
    public string $modelo;

    //Clase constructora
     public function __construct($marca, $modelo)
     {
        $this->marca = $marca;
        $this->modelo = $modelo;
     }


     //metodos 

     public function Informacion(){
        return "Informacion: " . " Marca: " . $this->marca . ", Modelo: " .  $this->modelo;
     }


}



?>