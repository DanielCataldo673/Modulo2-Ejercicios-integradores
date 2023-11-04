<?php
require_once "producto.php";

class Ropa extends Producto {


    //metodo

    public function seleccionar_Talla(){
        return "Un {$this->nombre} ,tiene un precio de {$this->precio} pesos, por favor Seleccionar su Talla.";
    }
}


?>