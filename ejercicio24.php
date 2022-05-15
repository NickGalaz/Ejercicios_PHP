<?php 

class persona{
    // PROPIEDADES
    public $nombre;
    private $edad;
    protected $altura;

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
$objAlumno= new persona();

// LLAMADO DE MÉTODO
$objAlumno->asignarNombre("Nick");




$objAlumno2= new persona();
$objAlumno2->asignarNombre("Miguelon");
$objAlumno2->imprimirNombre();

echo $objAlumno->nombre."<br>"; //IMPRIMIR UNA PROPIEDAD
echo $objAlumno2->nombre.". Su edad es de: ";
echo $objAlumno2->mostrarEdad(); // private
// echo $objAlumno2->altura."<br>"; // protected


?>