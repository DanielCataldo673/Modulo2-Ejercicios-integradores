<?php

class Menu {
    //Atributos
   protected $id;
   protected $producto;
   protected $precio;
   protected $stock;
   protected $tipo;
   protected $imagen;


   //Metodos (leer)

   public function lista_completa() : array {
    $resultado = [];

    //llamar a la conexion
    $conexion = (new Conexion())->getConexion();

    $query = "SELECT * FROM menú";

    $PDOStatement = $conexion->prepare($query);

    $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);

    $PDOStatement->execute();

    $resultado = $PDOStatement->fetchAll();

    return $resultado;





   }



   

   

   /**
    * Get the value of id
    */ 
   public function getId()
   {
      return $this->id;
   }

   /**
    * Set the value of id
    *
    * @return  self
    */ 
   public function setId($id)
   {
      $this->id = $id;

      return $this;
   }

   /**
    * Get the value of producto
    */ 
   public function getProducto()
   {
      return $this->producto;
   }

   /**
    * Set the value of producto
    *
    * @return  self
    */ 
   public function setProducto($producto)
   {
      $this->producto = $producto;

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

   /**
    * Get the value of stock
    */ 
   public function getStock()
   {
      return $this->stock;
   }

   /**
    * Set the value of stock
    *
    * @return  self
    */ 
   public function setStock($stock)
   {
      $this->stock = $stock;

      return $this;
   }

   /**
    * Get the value of tipo
    */ 
   public function getTipo()
   {
      return $this->tipo;
   }

   /**
    * Set the value of tipo
    *
    * @return  self
    */ 
   public function setTipo($tipo)
   {
      $this->tipo = $tipo;

      return $this;
   }

   /**
    * Get the value of imagen
    */ 
   public function getImagen()
   {
      return $this->imagen;
   }

   /**
    * Set the value of imagen
    *
    * @return  self
    */ 
   public function setImagen($imagen)
   {
      $this->imagen = $imagen;

      return $this;
   }
}







?>