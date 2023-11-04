<?php

/*Funcion 3 : Invocar al constructor de la clase padre*/ 

class Vehiculo {
    private $marca;
    private $modelo;
 
    public function  __construct($marca, $modelo)
    {
     $this->marca = $marca;
     $this->modelo = $modelo;
    }
     
    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }
 }

 class Coche extends Vehiculo {
    private $numeroPuertas;
    //metodo

    public function __construct($marca, $modelo, $numeroPuertas){//Accede a la propiedad de la clase padre
        parent::__construct($marca, $modelo);
        $this->numeroPuertas = $numeroPuertas;
    }

    public function getNumeroPuertas() {
        return $this->numeroPuertas;
    }

    public function setNumeroPuertas($numeroPuertas) {
        $this->numeroPuertas = $numeroPuertas;
    }
}
    class Motocicleta extends Vehiculo {
        private $cilindrada;
        //metodo
    
        public function __construct($marca, $modelo, $cilindrada){//Accede a la propiedad de la clase padre
            parent::__construct($marca, $modelo);
            $this->cilindrada = $cilindrada;
        }
    
        public function getCilindrada() {
            return $this->cilindrada;
        }
    
        public function setCilindrada($cilindrada) {
            $this->cilindrada = $cilindrada;
        }
}
//INDEX

$vehiculo = new Vehiculo("Fiat", "Uno");

echo "Marca Vehiculo : " . $vehiculo->getMarca() . "<br>";
echo "Modelo Vehiculo : " . $vehiculo->getModelo() . "<hr>";

$vehiculo2 = new Coche("Honda", "Civic", 4);

echo "Marca Coche : " . $vehiculo2->getMarca() . "<br>";
echo "Modelo Coche : " . $vehiculo2->getModelo() . "<br>";
echo "Numero de Puertas del Coche : " . $vehiculo2->getNumeroPuertas() . "<hr>";

$vehiculo3 = new Motocicleta("Honda", "Transalt", 1000);

echo "Marca Motocicleta : " . $vehiculo3->getMarca() . "<br>";
echo "Edad Profesor : " . $vehiculo3->getModelo() . "<br>";
echo "La Cilindrada de esta Motocicleta es : " . $vehiculo3->getCilindrada() . "<br>";



?>