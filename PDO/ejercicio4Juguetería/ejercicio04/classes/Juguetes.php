<?php

class Juguetes {
    //Atributos
   protected $id;
   protected $nombre;
   protected $precio;
   protected $imagen;


   //Metodos (leer)

   public function lista_completa() : array {
    $resultado = [];

    //llamar a la conexion
    $conexion = (new Conexion())->getConexion();
    $query = 

    $query = "SELECT j.imagen, j.nombre, j.precio, c.nombre_Categoria
    FROM juguetes j
    INNER JOIN categoria c ON c.id = j.categoria_id";

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