<?php

class Personajes  {

    //Atributos
    protected $id;
    protected $nombre_completo;
    protected $altura;
    protected $peso;
    protected $color_pelo;
    protected $color_piel;
    protected $color_ojos;
    protected $cumpleanios;
    protected $genero;
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



 //Metodo buscar

 public function buscarPersonajes($keywords){
        //llamamos a la conexion
        $conexion = (new Conexion())->getConexion();
        //Creamos una variable con comodines para buscar coincidencias
        $keywords = '%' . $keywords . '%';

        //llamamos a las query
        $query = "SELECT * FROM personajes where nombre_completo LIKE :keywords ";

        //preparamos la consulta
        $PDOStatement = $conexion->prepare($query);

        //preparamos la busqueda con BINDPARAM
        $PDOStatement->bindParam(':keywords', $keywords, PDO::PARAM_STR);

        //executamos
        $PDOStatement->execute();

        
        $resultados = $PDOStatement->fetchAll(PDO::FETCH_CLASS, self::class);

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
     * Get the value of nombre_completo
     */ 
    public function getNombre_completo()
    {
        return $this->nombre_completo;
    }

    /**
     * Set the value of nombre_completo
     *
     * @return  self
     */ 
    public function setNombre_completo($nombre_completo)
    {
        $this->nombre_completo = $nombre_completo;

        return $this;
    }

    /**
     * Get the value of altura
     */ 
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */ 
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    

    /**
     * Get the value of peso
     */ 
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */ 
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of color_pelo
     */ 
    public function getColor_pelo()
    {
        return $this->color_pelo;
    }

    /**
     * Set the value of color_pelo
     *
     * @return  self
     */ 
    public function setColor_pelo($color_pelo)
    {
        $this->color_pelo = $color_pelo;

        return $this;
    }

    /**
     * Get the value of color_piel
     */ 
    public function getColor_piel()
    {
        return $this->color_piel;
    }

    /**
     * Set the value of color_piel
     *
     * @return  self
     */ 
    public function setColor_piel($color_piel)
    {
        $this->color_piel = $color_piel;

        return $this;
    }

    /**
     * Get the value of color_ojos
     */ 
    public function getColor_ojos()
    {
        return $this->color_ojos;
    }

    /**
     * Set the value of color_ojos
     *
     * @return  self
     */ 
    public function setColor_ojos($color_ojos)
    {
        $this->color_ojos = $color_ojos;

        return $this;
    }

    /**
     * Get the value of cumpleanios
     */ 
    public function getCumpleanios()
    {
        return $this->cumpleanios;
    }

    /**
     * Set the value of cumpleanios
     *
     * @return  self
     */ 
    public function setCumpleanios($cumpleanios)
    {
        $this->cumpleanios = $cumpleanios;

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