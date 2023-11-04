<?php

class Personajes {
    //Atributos
   protected $id;
   protected $nombre;
   protected $descripcion;
   protected $peleas_ganadas;
   protected $imagen;


   //Metodos (leer)

   public function lista_completa() : array {
    $resultado = [];

    //llamar a la conexion
    $conexion = (new Conexion())->getConexion();

    $query = "SELECT * FROM personajes";

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
    * Get the value of descripcion
    */ 
   public function getDescripcion()
   {
      return $this->descripcion;
   }

   /**
    * Set the value of descripcion
    *
    * @return  self
    */ 
   public function setDescripcion($descripcion)
   {
      $this->descripcion = $descripcion;

      return $this;
   }

   /**
    * Get the value of peleas_ganadas
    */ 
   public function getPeleas_ganadas()
   {
      return $this->peleas_ganadas;
   }

   /**
    * Set the value of peleas_ganadas
    *
    * @return  self
    */ 
   public function setPeleas_ganadas($peleas_ganadas)
   {
      $this->peleas_ganadas = $peleas_ganadas;

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