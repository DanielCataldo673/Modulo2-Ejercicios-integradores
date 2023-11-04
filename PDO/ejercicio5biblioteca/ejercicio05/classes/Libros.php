<?php

class Libros {
    //Atributos
   protected $id;
   protected $titulo;
   protected $autor;
   protected $genero;


   //Metodos (leer)

   public function lista_completa() : array {
    $resultado = [];

    //llamar a la conexion
    $conexion = (new Conexion())->getConexion();
    $query = 

    $query = "SELECT *
    FROM libros";

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
    * Get the value of titulo
    */ 
   public function getTitulo()
   {
      return $this->titulo;
   }

   /**
    * Set the value of titulo
    *
    * @return  self
    */ 
   public function setTitulo($titulo)
   {
      $this->titulo = $titulo;

      return $this;
   }

   /**
    * Get the value of autor
    */ 
   public function getAutor()
   {
      return $this->autor;
   }

   /**
    * Set the value of autor
    *
    * @return  self
    */ 
   public function setAutor($autor)
   {
      $this->autor = $autor;

      return $this;
   }

   /**
    * Get the value of genero
    */ 
   public function getGenero()
   {
      return $this->genero;
   }

   /**
    * Set the value of genero
    *
    * @return  self
    */ 
   public function setGenero($genero)
   {
      $this->genero = $genero;

      return $this;
   }
}







?>