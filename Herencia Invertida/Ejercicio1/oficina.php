<?php

class Empleado {
    private $nombre;
    private $salario;


    public function __construct($nombre,$salario)
    {
        $this->nombre = $nombre;
        $this->salario = $salario;
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
     * Get the value of salario
     */ 
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @return  self
     */ 
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }
}

class Oficina{
    private $empleados =[];
//Metodos agregar
    public function agregarempleados(Empleado $empleado){
        $this->empleados[] = $empleado;
    }
//Metodo de mostrar empleado
public function mostrarEmpleados() {
    foreach($this->empleados as $empleado) {
        echo "Nombre: " . $empleado->getNombre() . ", Salario: " . 
        $empleado->getSalario() . "<br>";
    }
}
}
 $empleado1 = new Empleado("Juan",300000);
 $empleado2 = new Empleado("Maria",35000);
 $empleado3 = new Empleado("Franco",5000);

 $oficina = new Oficina();
 $oficina->agregarempleados($empleado1);
 $oficina->agregarempleados($empleado2);

 $oficina->mostrarEmpleados();

?>