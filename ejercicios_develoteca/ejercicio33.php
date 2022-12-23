<?php

$jsonContenido='[
    {"nombre":"Ruben", "apellido":"Maidana"},
    {"nombre":"Dario", "apellido":"Amarilla"}
    ]'; 

    $resultado= json_decode($jsonContenido);
    //print_r($resultado);

    foreach ($resultado as $persona){
        echo ($persona->nombre)." ".($persona->apellido)."<br/>";
    }
?>