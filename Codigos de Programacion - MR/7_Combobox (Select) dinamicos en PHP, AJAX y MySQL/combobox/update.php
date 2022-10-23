<?php
	require ('conexion.php');
	
	$id_localidad = $_POST['cbx_localidad'];
	
	$sql = "INSERT INTO datos (id_localidad) VALUES('$id_localidad')";
	$resultado = $mysqli->query($sql);
	
	if($resultado){
		echo "Registro Guardado";
		} else {
		echo "Error al Registrar";
	}
?>