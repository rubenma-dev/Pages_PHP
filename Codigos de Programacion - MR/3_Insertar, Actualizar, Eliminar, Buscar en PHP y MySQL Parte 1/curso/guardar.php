<?php

require 'conexion.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$estado_civil = $_POST['estado_civil']; //Esta esta sin parametros porque es un "Select" en el formulario CRUD.
$hijos = isset($_POST['hijo']) ? $_POST['hijos'] : 0;
$intereses = isset($_POST['intereses']) ? $_POST['intereses'] : null;

$arrayIntereses = null;

$num_array = count($intereses);
$contador = 0;

if($num_array>0){
    foreach($intereses as $key => $value){
        if ($contador != $num_array-1)
        $arrayIntereses .= $value.' ';
        elseif
        $arrayIntereses .= $value;
        $contador++;
    }     
}

$sql = "INSERT INTO persona (nombre, correo, telefono, estado_civil, hijos,
 intereses) VALUES ('$nombre', '$correo', '$telefono', '$hijos', '$intereses')" 
 $resultado = $mysqli->query($sql);
?>