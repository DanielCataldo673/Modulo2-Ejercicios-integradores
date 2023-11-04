<?php

class Socios {
    //Atributos
   protected $id;
   protected $nombre;
   protected $direccion;
   protected $telefono;


   //Metodos (leer)

   public function lista_completa() : array {
    $resultado = [];

    //llamar a la conexion
    $conexion = (new Conexion())->getConexion();
    $query = 

    $query = "SELECT *
    FROM socios";

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
    * Get the value of direccion
    */ 
   public function getDireccion()
   {
      return $this->direccion;
   }

   /**
    * Set the value of direccion
    *
    * @return  self
    */ 
   public function setDireccion($direccion)
   {
      $this->direccion = $direccion;

      return $this;
   }

   /**
    * Get the value of telefono
    */ 
   public function getTelefono()
   {
      return $this->telefono;
   }

   /**
    * Set the value of telefono
    *
    * @return  self
    */ 
   public function setTelefono($telefono)
   {
      $this->telefono = $telefono;

      return $this;
   }
}







?>