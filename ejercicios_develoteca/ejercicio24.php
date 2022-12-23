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

$objAlumno= new persona("Juan"); // instancia o creacion de un objeto.
$objAlumno->asignarNombre("Ruben");

$objAlumno2= new persona("Jose"); // instancia o creacion de un objeto.
$objAlumno2->asignarNombre("Marcos");
$objAlumno2->imprimirNombre();

echo $objAlumno2->nombre."<br/>"; // imprimir una propiedad.
echo $objAlumno2->mostrarEdad();

echo $objAlumno->nombre."<br/>"; // imprimir una propiedad.


?>