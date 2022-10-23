<?php
	require ('../conexion.php');
	
	$id_municipio = $_POST['id_municipio'];
	
	$query = "SELECT id_localidad, localidad FROM t_localidad WHERE id_municipio = '$id_municipio' ORDER BY localidad";
	$resultado=$mysqli->query($query);
	
	while($row = $resultado->fetch_assoc())
	{
		$html.= "<option value='".$row['id_localidad']."'>".$row['localidad']."</option>";
	}
	echo $html;
?>