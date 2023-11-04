<?php
require_once "persona.php";

class Estudiante extends Persona {


    //metodo

    public function Estudiar(){
        return "Un estudiante llamado {$this->nombre} de {$this->edad} años puede estudiar.";
    }
}


?>