<?php 

class persona{
    // PROPIEDADES
    public $nombre;
    private $edad;
    protected $altura;

    function __construct($nuevoNombre){
        $this->nombre=$nuevoNombre;
    }

    // ACCIONES O MÉTODOS
    public function asignarNombre($nuevoNombre){ 
        $this->nombre=$nuevoNombre;
    }
    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre."<br>";
    }
    public function mostrarEdad(){
        $this->edad=34;
        return $this->edad;
    }

}


// INSTANCIA O CREACIÓN DE UN OBJETO
$objAlumno= new persona("Nico Galaz");

// LLAMADO DE MÉTODO
// $objAlumno->asignarNombre("Nick");
$objAlumno->imprimirNombre();

?>