<?php

require_once "vehiculo.php";

class Bicicleta extends Vehiculo {


    //metodo

    public function Pedalear(){
        return "Una bicicleta {$this->marca} {$this->modelo} puede pedalear.";
    }
}


?>