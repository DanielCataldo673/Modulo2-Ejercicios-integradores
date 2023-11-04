<?php

require_once "producto.php";

class Electronico extends Producto {


    //metodo

    public function calcular_Garantia(){
        return "La {$this->nombre} ,tienen un precio de {$this->precio} pesos, Calcular su Garantia.";
    }
}


?>