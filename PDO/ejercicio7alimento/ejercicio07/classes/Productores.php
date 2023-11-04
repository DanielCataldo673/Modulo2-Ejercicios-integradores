<?php

class Productores {
    //Atributos
   protected $id;
   protected $productor;
   protected $epoca_cosecha;
   protected $consumo_persona;


   //Metodos (leer)

   public function lista_completa() : array {
    $resultado = [];

    //llamar a la conexion
    $conexion = (new Conexion())->getConexion();
    $query = 

    $query = "SELECT *
    FROM productores";

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
    * Get the value of productor
    */ 
   public function getProductor()
   {
      return $this->productor;
   }

   /**
    * Set the value of productor
    *
    * @return  self
    */ 
   public function setProductor($productor)
   {
      $this->productor = $productor;

      return $this;
   }

   /**
    * Get the value of epoca_cosecha
    */ 
   public function getEpoca_cosecha()
   {
      return $this->epoca_cosecha;
   }

   /**
    * Set the value of epoca_cosecha
    *
    * @return  self
    */ 
   public function setEpoca_cosecha($epoca_cosecha)
   {
      $this->epoca_cosecha = $epoca_cosecha;

      return $this;
   }

   /**
    * Get the value of consumo_persona
    */ 
   public function getConsumo_persona()
   {
      return $this->consumo_persona;
   }

   /**
    * Set the value of consumo_persona
    *
    * @return  self
    */ 
   public function setConsumo_persona($consumo_persona)
   {
      $this->consumo_persona = $consumo_persona;

      return $this;
   }
}







?>