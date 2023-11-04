<?php

require_once "persona.php";

//clases derivadas o hijas

class Estudiante extends Persona {
        public function realizaraccion()
        {
            echo "El estudiante puede estudiar";
        }
    }


    class Profesor extends Persona {
        public function realizaraccion()
        {
            echo "El profesor puede enseñar";
        }
    }


?> 