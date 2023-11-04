<?php

/*Funcion 3 : Invocar al constructor de la clase padre*/ 

class Persona {
    private $nombre;
    private $edad;
 
 
    public function  __construct($nombre, $edad)
    {
     $this->nombre = $nombre;
     $this->edad = $edad;
    }
     
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    
     
    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }
 }

 class Estudiante extends Persona {
    private $matricula;
    //metodo

    public function __construct($nombre, $edad, $matricula){//Accede a la propiedad de la clase padre
        parent::__construct($nombre, $edad);
        $this->matricula = $matricula;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

}

    class Profesor extends Persona {
        private $especialidad;
        //metodo
    
        public function __construct($nombre, $edad, $especialidad){//Accede a la propiedad de la clase padre
            parent::__construct($nombre, $edad);
            $this->especialidad = $especialidad;
        }
    
        public function getEspecialidad() {
            return $this->especialidad;
        }
    
        public function setEspecialidad($especialidad) {
            $this->especialidad = $especialidad;
        }
}
 
//INDEX

$persona = new Persona("Juan", 25);

echo "Nombre Persona : " . $persona->getNombre() . "<br>";
echo "Edad Persona : " . $persona->getEdad() . "<hr>";

$persona2 = new Estudiante("Daniel", 47, 3456);

echo "Nombre Estudiante : " . $persona2->getNombre() . "<br>";
echo "Edad Estudiante : " . $persona2->getEdad() . "<br>";
echo "Matricula Estudiante : " . $persona2->getMatricula() . "<hr>";

$persona3 = new Profesor("Sandra", 37, "Programadora");

echo "Nombre Profesor : " . $persona3->getNombre() . "<br>";
echo "Edad Profesor : " . $persona3->getEdad() . "<br>";
echo "Especialidad del Profesor : " . $persona3->getEspecialidad() . "<hr>";







?>