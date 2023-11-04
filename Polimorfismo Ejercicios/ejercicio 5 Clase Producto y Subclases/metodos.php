<?php

    require_once "productos.php";


    //funcion polimórfica
    function realizarmetodosproductos (Producto $producto ){
        $producto->realizarmetodos();
    }



?>