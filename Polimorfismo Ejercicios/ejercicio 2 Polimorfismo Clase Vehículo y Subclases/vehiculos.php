<?php

require_once "vehiculo.php";

//clases derivadas o hijas

class Coche extends Vehiculo {
        public function realizaraccion()
        {
            echo "El coche puede acelerar";
        }
    }


    class Bicicleta extends Vehiculo {
        public function realizaraccion()
        {
            echo "La bicicleta puede pedalear";
        }
    }


?>  