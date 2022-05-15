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


class trabajador extends persona{
    public $puesto;
    public function presentarseComoTrabajador(){
        echo "Hola soy ".$this->nombre." y mi puesto es de ".$this->puesto.".";
    }
}



// INSTANCIA O CREACIÓN DE UN OBJETO
$objTrabajador= new trabajador();

// LLAMADO DE MÉTODO
$objTrabajador->asignarNombre("Nick Galaz");

$objTrabajador->puesto="Programador";

$objTrabajador->presentarseComoTrabajador();


?>