<?php
require_once "vehiculo.php";

class Coche extends Vehiculo {


    //metodo

    public function Acelerar(){
        return "Un coche {$this->marca} {$this->modelo} puede acelerar.";
    }
}


?>