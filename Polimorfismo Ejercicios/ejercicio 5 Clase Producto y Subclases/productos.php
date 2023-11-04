<?php

require_once "producto.php";

//clases derivadas o hijas

class Electronico extends Producto {
        public function realizarmetodos()
        {
            echo "Calcular la garantia del producto electronico";
        }
    }


    class Ropa extends Producto {
        public function realizarmetodos()
        {
            echo "Seleccionar talla de la prenda de ropa elegida";
        }
    }


?> 