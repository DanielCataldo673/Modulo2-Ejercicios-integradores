<?php

/*Funcion 3 : Invocar al constructor de la clase padre*/ 

class Animal {
    private $nombre;
 
 
    public function  __construct($nombre)
    {
     $this->nombre = $nombre;
    }
     
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
 }

 class Perro extends Animal {
    private $raza;
    //metodo

    public function __construct($nombre, $raza){//Accede a la propiedad de la clase padre
        parent::__construct($nombre);
        $this->raza = $raza;
    }

    public function getRaza() {
        return $this->raza;
    }

    public function setRaza($raza) {
        $this->raza = $raza;
    }
}
//INDEX

$perro = new Perro("Pelusa", "Mestiza");

echo "Nombre Perro : " . $perro->getNombre() . "<br>";
echo "Raza Perro : " . $perro->getRaza() . "<br>";



?>