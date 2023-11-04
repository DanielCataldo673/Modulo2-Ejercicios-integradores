<?php

class Empleados {
    private $nombre;
    private $rol;


    public function __construct($nombre,$rol)
    {
        $this->nombre = $nombre;
        $this->rol = $rol;
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
     * Get the value of rol
     */ 
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set the value of rol
     *
     * @return  self
     */ 
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }
}
class Mcdonalds {
    private $empleados =[];
//Metodos agregar
public function agregarEmpleados(Empleados $empleado) {
    $this->empleados[] = ['nombre'=>$empleado->getNombre(), 'rol'=>
    $empleado->getRol() ];
}
    //Metodo de mostrar
public function mostrarEmpleados() {
    return $this->empleados;
}
}

$empleados1 = new Empleados("Pedro","Gerente");
$empleados2 = new Empleados("Jaime","Empleado Adminstrativo");
$empleados3 = new Empleados("Ismael","Limpieza");

$Mcdonalds = new Mcdonalds();
$Mcdonalds->agregarEmpleados($empleados1);
$Mcdonalds->agregarEmpleados($empleados2);
$Mcdonalds->agregarEmpleados($empleados3);

$Mcdonalds->mostrarEmpleados(); 
    ?>
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <table class="table">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Rol</th>
     
    </tr>
    <?php  foreach($Mcdonalds ->mostrarEmpleados() as $empleado) { ?>
        <tr>
            <td><?=  $empleado['nombre'];  ?></td>
            <td><?=  $empleado['rol'];  ?></td>

                
                 
        </tr>
    
    <?php }  ?>

</table>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>