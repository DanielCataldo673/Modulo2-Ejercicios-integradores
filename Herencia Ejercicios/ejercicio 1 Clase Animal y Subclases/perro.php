<?php
require_once "animal.php";

class Perro extends Animal {


    //metodo

    public function Ladrar(){
        return "{$this->nombre} Ladra";
    }
}


?>