<?php

    require_once "animales.php";


    //funcion polimórfica
    function hacerSonidoAnimal (Animal $animal ){
        $animal->hacerSonido();
    }



?>