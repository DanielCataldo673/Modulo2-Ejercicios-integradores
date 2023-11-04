<?php

    require_once "animal.php";

    //clases derivadas o hijas

    class Gato extends Animal {
        public function hacerSonido()
        {
            echo "El gato Maullo";
        }
    }


    class Perro extends Animal {
        public function hacerSonido()
        {
            echo "El perro Ladra";
        }
    }


?>  