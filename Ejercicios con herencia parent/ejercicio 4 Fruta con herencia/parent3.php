<?php

/*Funcion 3 : Invocar al constructor de la clase padre*/ 

class Fruta {
    private $nombre;
    private $color;
 
    public function  __construct($nombre, $color)
    {
     $this->nombre = $nombre;
     $this->color = $color;
    }
     
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }
 }

 class Manzana extends Fruta {
    private $tipo;
    //metodo

    public function __construct($nombre, $color, $tipo){//Accede a la propiedad de la clase padre
        parent::__construct($nombre, $color);
        $this->tipo = $tipo;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
}
    class Banana extends Fruta {
        private $longitud;
        //metodo
    
        public function __construct($nombre, $color, $longitud){//Accede a la propiedad de la clase padre
            parent::__construct($nombre, $color);
            $this->longitud = $longitud;
        }
    
        public function getLongitud() {
            return $this->longitud;
        }
    
        public function setLongitud($longitud) {
            $this->longitud = $longitud;
        }
}
//INDEX

$fruta = new Fruta("Pera", "Amarillo");

echo "Nombre de la Fruta : " . $fruta->getNombre() . "<br>";
echo "Color de la Fruta : " . $fruta->getColor() . "<hr>";

$fruta2 = new Manzana("Manzana", "Roja", "Deliciosa");

echo "Nombre de la Fruta : " . $fruta2->getNombre() . "<br>";
echo "Color de la Fruta : " . $fruta2->getColor() . "<br>";
echo "Tipo de Fruta : " . $fruta2->getTipo() . "<hr>";

$fruta3 = new Banana("Banana", "Amarillo", 15);

echo "Nombre de la Fruta : " . $fruta3->getNombre() . "<br>";
echo "Color de la Fruta : " . $fruta3->getColor() . "<br>";
echo "La Longitud de la Fruta es : " . $fruta3->getLongitud() . " Cm" . "<br>";



?>