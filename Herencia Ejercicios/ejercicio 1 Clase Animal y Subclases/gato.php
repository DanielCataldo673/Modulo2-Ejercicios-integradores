<?php

require_once "animal.php";

class Gato extends Animal {


    //metodo

    public function Maulla(){
        return "{$this->nombre} Maulla";
    }
}


?>