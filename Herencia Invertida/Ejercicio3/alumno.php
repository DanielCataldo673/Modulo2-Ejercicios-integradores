<?php

class Alumno {
    private $nombre;
    private $grado;


    public function __construct($nombre,$grado)
    {
        $this->nombre = $nombre;
        $this->grado = $grado;
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
     * Get the value of grado
     */ 
    public function getGrado()
    {
        return $this->grado;
    }

    /**
     * Set the value of grado
     *
     * @return  self
     */ 
    public function setGrado($grado)
    {
        $this->grado = $grado;

        return $this;
    }
    } 

     class Escuela{
        private $alumnos =[];
    //Metodos agregar
    public function agregarAlumnos(Alumno $alumno) {
        $this->alumnos[] = ['nombre'=>$alumno->getNombre(), 'grado'=>
        $alumno->getGrado() ];
    }
       
        //Metodo de mostrar
public function mostrarAlumnos() {
    return $this->alumnos;
    }
}
    
    $alumno1 = new Alumno("Pedro","1°");
    $alumno2 = new Alumno("Jaime","5°");
    $alumno3 = new Alumno("Ismael","3°");

    $escuela = new Escuela();
    $escuela->agregarAlumnos($alumno1);
    $escuela->agregarAlumnos($alumno2);
    $escuela->agregarAlumnos($alumno3);

    $escuela->mostrarAlumnos();
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
      <th scope="col">Grado</th>
     
    </tr>
    <?php  foreach($escuela ->mostrarAlumnos() as $alumno) { ?>
        <tr>
            <td><?=  $alumno['nombre'];  ?></td>
            <td><?=  $alumno['grado'];  ?></td>

                
                 
        </tr>
    
    <?php }  ?>

</table>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>