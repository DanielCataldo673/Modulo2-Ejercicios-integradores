<?php

class Producto {
    private $nombre;
    private $precio;


    public function __construct($nombre,$precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

        /**
         * Get the value of precio
         */ 
        public function getPrecio()
        {
                return $this->precio;
        }

        /**
         * Set the value of precio
         *
         * @return  self
         */ 
        public function setPrecio($precio)
        {
                $this->precio = $precio;

                return $this;
        }
}
class Tienda{
    private $productos =[];
//Metodos agregar
    public function agregarProductos(Producto $producto){
        $this->productos[] = $producto;
    }
//Metodo de mostrar
public function mostrarProductos() {
    foreach($this->productos as $producto) {
        echo "Nombre: " . $producto->getNombre() . ", Salario: " . 
        $producto->getPrecio() . "<br>";
    }
}
}
$producto1 = new Producto("Leche",500);
$producto2 = new Producto("Azucar",1000);
$producto3 = new Producto("Harina",300);

$tienda = new Tienda();
$tienda->agregarProductos($producto1);
$tienda->agregarProductos($producto2);
$tienda->agregarProductos($producto3);

$tienda->mostrarProductos();
    ?>