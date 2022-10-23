<?php
	
	$mysqli = new mysqli('localhost', 'ruben', 'ruben', 'app_1');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>