<?php
session_start(); // Al cerrar la sesion de destruye la conexion con el servidor y hay que ingresar de nuevo los datos.

$_SESSION["usuario"]="Ruben";
$_SESSION["estatus"]="Logueado";

echo "Sesion iniciada".":<br/>";

echo "Usuario:" .$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];




?>