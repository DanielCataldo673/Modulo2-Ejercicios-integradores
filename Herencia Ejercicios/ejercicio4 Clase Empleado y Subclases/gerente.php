<?php

require_once "empleado.php";

class Gerente extends Empleado {


    //metodo

    public function Gestionar(){
        return "La gerente llamada {$this->nombre} ,que cobra un salario de {$this->salario} pesos, puede gestionar.";
    }
}


?>