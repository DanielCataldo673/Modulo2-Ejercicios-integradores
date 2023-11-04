<?php

class Personajes  {

    //Atributos
    protected $id;
    protected $nombre;
    protected $alias;
    protected $descripcion;
    protected $familia;
    protected $afiliacion;
    protected $poderes_habilidades;
    protected $origen;
    protected $historia_fondo;
    protected $enemigos;
    protected $amigos_aliados;
    protected $apariciones_notables;
    protected $fecha_creacion;
    protected $creadores;
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

 public function buscarPersonajes($keywords){
        //llamamos a la conexion
        $conexion = (new Conexion())->getConexion();
        //Creamos una variable con comodines para buscar coincidencias
        $keywords = '%' . $keywords . '%';

        //llamamos a las query
        $query = "SELECT * FROM personajes where nombre LIKE :keywords ";

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
     * Get the value of alias
     */ 
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set the value of alias
     *
     * @return  self
     */ 
    public function setAlias($alias)
    {
        $this->alias = $alias;

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
     * Get the value of familia
     */ 
    public function getFamilia()
    {
        return $this->familia;
    }

    /**
     * Set the value of familia
     *
     * @return  self
     */ 
    public function setFamilia($familia)
    {
        $this->familia = $familia;

        return $this;
    }

    /**
     * Get the value of afiliacion
     */ 
    public function getAfiliacion()
    {
        return $this->afiliacion;
    }

    /**
     * Set the value of afiliacion
     *
     * @return  self
     */ 
    public function setAfiliacion($afiliacion)
    {
        $this->afiliacion = $afiliacion;

        return $this;
    }

    /**
     * Get the value of poderes_habilidades
     */ 
    public function getPoderes_habilidades()
    {
        return $this->poderes_habilidades;
    }

    /**
     * Set the value of poderes_habilidades
     *
     * @return  self
     */ 
    public function setPoderes_habilidades($poderes_habilidades)
    {
        $this->poderes_habilidades = $poderes_habilidades;

        return $this;
    }

    /**
     * Get the value of origen
     */ 
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * Set the value of origen
     *
     * @return  self
     */ 
    public function setOrigen($origen)
    {
        $this->origen = $origen;

        return $this;
    }

    /**
     * Get the value of historia_fondo
     */ 
    public function getHistoria_fondo()
    {
        return $this->historia_fondo;
    }

    /**
     * Set the value of historia_fondo
     *
     * @return  self
     */ 
    public function setHistoria_fondo($historia_fondo)
    {
        $this->historia_fondo = $historia_fondo;

        return $this;
    }

    /**
     * Get the value of enemigos
     */ 
    public function getEnemigos()
    {
        return $this->enemigos;
    }

    /**
     * Set the value of enemigos
     *
     * @return  self
     */ 
    public function setEnemigos($enemigos)
    {
        $this->enemigos = $enemigos;

        return $this;
    }

    /**
     * Get the value of amigos_aliados
     */ 
    public function getAmigos_aliados()
    {
        return $this->amigos_aliados;
    }

    /**
     * Set the value of amigos_aliados
     *
     * @return  self
     */ 
    public function setAmigos_aliados($amigos_aliados)
    {
        $this->amigos_aliados = $amigos_aliados;

        return $this;
    }

    /**
     * Get the value of apariciones_notables
     */ 
    public function getApariciones_notables()
    {
        return $this->apariciones_notables;
    }

    /**
     * Set the value of apariciones_notables
     *
     * @return  self
     */ 
    public function setApariciones_notables($apariciones_notables)
    {
        $this->apariciones_notables = $apariciones_notables;

        return $this;
    }

    /**
     * Get the value of fecha_creacion
     */ 
    public function getFecha_creacion()
    {
        return $this->fecha_creacion;
    }

    /**
     * Set the value of fecha_creacion
     *
     * @return  self
     */ 
    public function setFecha_creacion($fecha_creacion)
    {
        $this->fecha_creacion = $fecha_creacion;

        return $this;
    }

    /**
     * Get the value of creadores
     */ 
    public function getCreadores()
    {
        return $this->creadores;
    }

    /**
     * Set the value of creadores
     *
     * @return  self
     */ 
    public function setCreadores($creadores)
    {
        $this->creadores = $creadores;

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