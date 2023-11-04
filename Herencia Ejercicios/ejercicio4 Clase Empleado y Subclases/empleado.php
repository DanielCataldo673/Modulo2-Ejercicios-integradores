<?php

class Empleado {

    //declarando atributos
    public string $nombre;
    public int $salario;

    //Clase constructora
     public function __construct($nombre, $salario)
     {
        $this->nombre = $nombre;
        $this->salario = $salario;
     }


     //metodos 

     public function Informacion(){
        return "Informacion: " . " Nombre: " . $this->nombre . ", Salario: " .  $this->salario;
     }


}



?>