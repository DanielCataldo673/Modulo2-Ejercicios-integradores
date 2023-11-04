<?php

require_once "persona.php";

class Profesor extends Persona {


    //metodo

    public function Enseñar(){
        return "Una profesora llamada {$this->nombre} de {$this->edad} años puede enseñar.";
    }
}


?>