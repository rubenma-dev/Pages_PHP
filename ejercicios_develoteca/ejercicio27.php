<?php

class UnaClase{

    public static function unMetodo(){

        echo "Hola soy un metodo estatico";

    }
}

$obj=new UnaClase();
$obj->unMetodo();

UnaClase::unMetodo();

?>
