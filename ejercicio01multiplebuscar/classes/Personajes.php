<?php

class Personajes  {

    //Atributos
    protected $id;
    protected $nombre;
    protected $descripcion;
    protected $peleas_ganadas;
    protected $imagen;



    //Metodos (leer)

    public function lista_completa() : array {
            $resultado = [];

            //llamamos a la conexion
            $conexion = (new Conexion())->getConexion();

            $query = "SELECT * FROM personajes";

            $PDOStatement = $conexion->prepare($query);

            $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);

            $PDOStatement->execute();

            $resultado = $PDOStatement->fetchAll();

            return $resultado;
            



    }

/* Metodo descripcion reducida */

function recortar_palabras(int $cantidad =8): string {

    $texto = $this->descripcion;

    /* explode - divide un string en varios string */
    $array = explode(" " , $texto);

    /* contar cuantas palabras hay en el array */
    if(count($array) <= $cantidad){
        $resultado = $texto;
    }else {
        array_splice($array, $cantidad);
        $resultado = implode(" " , $array) . "...";
    }

    return $resultado;
 }


 //Metodo buscar

 public function buscarLibros($keywords){
        //llamamos a la conexion
        $conexion = (new Conexion())->getConexion();
        //Creamos una variable con comodines para buscar coincidencias
        $keywords = '%' . $keywords . '%';

        //llamamos a las query
        $query1 = "SELECT * FROM personajes where nombre LIKE :keywords ";

        //preparamos la consulta
        $PDOStatement1 = $conexion->prepare($query1);

        //preparamos la busqueda con BINDPARAM
        $PDOStatement1->bindParam(':keywords', $keywords, PDO::PARAM_STR);

        //executamos
        $PDOStatement1->execute();
        $resultados1 = $PDOStatement1->fetchAll(PDO::FETCH_CLASS, self::class);


         //llamamos a las query
         $query2 = "SELECT * FROM marvel where nombre LIKE :keywords ";

         //preparamos la consulta
         $PDOStatement2 = $conexion->prepare($query2);
 
         //preparamos la busqueda con BINDPARAM
         $PDOStatement2->bindParam(':keywords', $keywords, PDO::PARAM_STR);
 
         //executamos
         $PDOStatement2->execute();
         $resultados2 = $PDOStatement2->fetchAll(PDO::FETCH_CLASS, self::class);


         $resultados = array_merge($resultados1, $resultados2);

        return $resultados;

        

 }

 // superheroes en particular 
 /* 
 En este caso específico, idHeroe es un marcador de posición en la consulta SQL "SELECT * FROM personajes WHERE id = :idHeroe". Cuando se ejecuta la consulta preparada, el valor de idHeroe se reemplaza por el valor que se pasa como argumento a la función superheroe_x_id.
 En otras palabras, el array ['idHeroe' => $idHeroe] se utiliza para asignar el valor de la variable $idHeroe al marcador de posición :idHeroe en la consulta SQL. Esto permite ejecutar la consulta de manera segura sin exponer la aplicación a ataques de inyección de SQL, ya que el valor de idHeroe se maneja de forma segura a través de una consulta preparada. */

 public function superheroe_x_id(int $idHeroe)
 {
     $conexion = (new Conexion())->getConexion();
     $query = "SELECT * FROM personajes WHERE id = :idHeroe";

     $PDOStatement = $conexion->prepare($query);
     $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
     $PDOStatement->execute(
         [
             'idHeroe' => $idHeroe
         ]
     );

     $result = $PDOStatement->fetch();

     if (!$result) {
         return null;
     }
     return $result;
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