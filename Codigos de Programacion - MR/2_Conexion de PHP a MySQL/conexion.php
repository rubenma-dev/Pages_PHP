<?php

$mysqli = new mysqli('localhost', 'ruben', 'ruben', 'app_1');

if($mysqli->connect_error){

    die("Fallo en la conexion: ". $mysqli->connect_error);
}

printf ("Servidor Informacion: %s\n", $mysqli->server_info);

?>  