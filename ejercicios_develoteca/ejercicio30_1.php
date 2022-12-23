<?php
session_start(); // Se almacena la informacion y se vuelve a cargar la infotmacion logueada

if( isset($_SESSION["usuario"])){

echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];

}else{
    
    echo "No hay datos";

}

?>