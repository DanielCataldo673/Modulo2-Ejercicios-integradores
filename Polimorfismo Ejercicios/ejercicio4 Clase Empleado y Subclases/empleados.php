<?php

require_once "empleado.php";

//clases derivadas o hijas

class Gerente extends Empleado {
        public function realizarfunciones()
        {
            echo "El gerente puede gestionar";
        }
    }


    class Asistente extends Empleado {
        public function realizarfunciones()
        {
            echo "El asistente puede asistir";
        }
    }


?> 