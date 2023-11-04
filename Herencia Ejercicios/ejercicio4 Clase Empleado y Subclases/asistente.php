<?php
require_once "empleado.php";

class Asistente extends Empleado {


    //metodo

    public function Asistir(){
        return "Una asistente llamada {$this->nombre} ,que cobra un salario de {$this->salario} pesos, puede asistir.";
    }
}


?>