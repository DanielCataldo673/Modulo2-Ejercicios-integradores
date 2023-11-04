<?php

class AutosUsados  {

    //Atributos
    protected $id;
    protected $marca;
    protected $modelo;
    protected $anio_fabricacion;
    protected $color;
    protected $tipo_carroceria;
    protected $numero_puertas;
    protected $numero_asientos;
    protected $tipo_combustible;
    protected $transmicion;
    protected $motor;
    protected $kilometraje;
    protected $historial_mantenimiento;
    protected $propietario_actual;
    protected $precio;
    protected $estado;
    protected $fecha_registro;
    protected $imagen;



    //Metodos (leer)

    public function lista_completa() : array {
            $resultado = [];

            //llamamos a la conexion
            $conexion = (new Conexion())->getConexion();

            $query = "SELECT * FROM autos_usados";

            $PDOStatement = $conexion->prepare($query);

            $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);

            $PDOStatement->execute();

            $resultado = $PDOStatement->fetchAll();

            return $resultado;
            



    }



 //Metodo buscar

 public function buscarAutos($keywords){
        //llamamos a la conexion
        $conexion = (new Conexion())->getConexion();
        //Creamos una variable con comodines para buscar coincidencias
        $keywords = '%' . $keywords . '%';

        //llamamos a las query
        $query = "SELECT * FROM autos_usados where marca LIKE :keywords ";

        //preparamos la consulta
        $PDOStatement = $conexion->prepare($query);

        //preparamos la busqueda con BINDPARAM
        $PDOStatement->bindParam(':keywords', $keywords, PDO::PARAM_STR);

        //executamos
        $PDOStatement->execute();

        
        $resultados = $PDOStatement->fetchAll(PDO::FETCH_CLASS, self::class);

        return $resultados;

        

 }//metodo ID

 

 public function autos_x_id(int $idAutos)
 {
     $conexion = (new Conexion())->getConexion();
     $query = "SELECT * FROM autos_usados WHERE id = :idAutos";

     $PDOStatement = $conexion->prepare($query);
     $PDOStatement->setFetchMode(PDO::FETCH_CLASS, self::class);
     $PDOStatement->execute(
         [
             'idAutos' => $idAutos
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
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */ 
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    

    /**
     * Get the value of anio_fabricacion
     */ 
    public function getAnio_fabricacion()
    {
        return $this->anio_fabricacion;
    }

    /**
     * Set the value of anio_fabricacion
     *
     * @return  self
     */ 
    public function setAnio_fabricacion($anio_fabricacion)
    {
        $this->anio_fabricacion = $anio_fabricacion;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of tipo_carroceria
     */ 
    public function getTipo_carroceria()
    {
        return $this->tipo_carroceria;
    }

    /**
     * Set the value of tipo_carroceria
     *
     * @return  self
     */ 
    public function setTipo_carroceria($tipo_carroceria)
    {
        $this->tipo_carroceria = $tipo_carroceria;

        return $this;
    }

    /**
     * Get the value of numero_puertas
     */ 
    public function getNumero_puertas()
    {
        return $this->numero_puertas;
    }

    /**
     * Set the value of numero_puertas
     *
     * @return  self
     */ 
    public function setNumero_puertas($numero_puertas)
    {
        $this->numero_puertas = $numero_puertas;

        return $this;
    }

    /**
     * Get the value of numero_asientos
     */ 
    public function getNumero_asientos()
    {
        return $this->numero_asientos;
    }

    /**
     * Set the value of numero_asientos
     *
     * @return  self
     */ 
    public function setNumero_asientos($numero_asientos)
    {
        $this->numero_asientos = $numero_asientos;

        return $this;
    }

    /**
     * Get the value of tipo_combustible
     */ 
    public function getTipo_combustible()
    {
        return $this->tipo_combustible;
    }

    /**
     * Set the value of tipo_combustible
     *
     * @return  self
     */ 
    public function setTipo_combustible($tipo_combustible)
    {
        $this->tipo_combustible = $tipo_combustible;

        return $this;
    }

    /**
     * Get the value of transmicion
     */ 
    public function getTransmicion()
    {
        return $this->transmicion;
    }

    /**
     * Set the value of transmicion
     *
     * @return  self
     */ 
    public function setTransmicion($transmicion)
    {
        $this->transmicion = $transmicion;

        return $this;
    }

    /**
     * Get the value of motor
     */ 
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * Set the value of motor
     *
     * @return  self
     */ 
    public function setMotor($motor)
    {
        $this->motor = $motor;

        return $this;
    }

    /**
     * Get the value of kilometraje
     */ 
    public function getKilometraje()
    {
        return $this->kilometraje;
    }

    /**
     * Set the value of kilometraje
     *
     * @return  self
     */ 
    public function setKilometraje($kilometraje)
    {
        $this->kilometraje = $kilometraje;

        return $this;
    }

    /**
     * Get the value of historial_mantenimiento
     */ 
    public function getHistorial_mantenimiento()
    {
        return $this->historial_mantenimiento;
    }

    /**
     * Set the value of historial_mantenimiento
     *
     * @return  self
     */ 
    public function setHistorial_mantenimiento($historial_mantenimiento)
    {
        $this->historial_mantenimiento = $historial_mantenimiento;

        return $this;
    }

    /**
     * Get the value of propietario_actual
     */ 
    public function getPropietario_actual()
    {
        return $this->propietario_actual;
    }

    /**
     * Set the value of propietario_actual
     *
     * @return  self
     */ 
    public function setPropietario_actual($propietario_actual)
    {
        $this->propietario_actual = $propietario_actual;

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
     * Get the value of estado
     */ 
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */ 
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of fecha_registro
     */ 
    public function getFecha_registro()
    {
        return $this->fecha_registro;
    }

    /**
     * Set the value of fecha_registro
     *
     * @return  self
     */ 
    public function setFecha_registro($fecha_registro)
    {
        $this->fecha_registro = $fecha_registro;

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