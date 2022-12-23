<?php

class persona{

    public $nombre; // propiedades
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){ // acciones o metodos...
        $this->nombre = $nuevoNombre;
    }
    public function imprimirNombre(){ 
        echo "Hola soy ".$this->nombre."<br/>";
    }
    public function mostrarEdad(){
        $this->edad=20;
        return $this->edad;
    }

}

class trabajador extends persona{
    public $puesto; // Propiedad nueva.

    public function presentarseComoTrabajador(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }
}

$objTrabajador= new trabajador("Jose Miranda"); // instancia o creacion de un objeto.
$objTrabajador->asignarNombre("Ruben Maidana"); // llamando un metodo.
$objTrabajador->puesto="Profesor";

$objTrabajador->presentarseComoTrabajador();

?>