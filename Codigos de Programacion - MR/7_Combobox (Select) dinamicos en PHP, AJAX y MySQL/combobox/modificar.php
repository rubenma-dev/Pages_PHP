<?php
	require ('conexion.php');
	
	$localidad = 798;
	
	$query = "SELECT l.id_municipio, m.id_estado FROM t_localidad AS l INNER JOIN t_municipio AS m ON l.id_municipio=m.id_municipio WHERE id_localidad = '$localidad'";
	$resultado = $mysqli->query($query);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	$estado = $row['id_estado'];
	$municipio = $row['id_municipio'];
	
	$queryE = "SELECT id_estado, estado FROM t_estado ORDER BY estado";
	$resultadoE = $mysqli->query($queryE);
	
	$queryM = "SELECT id_municipio, municipio FROM t_municipio WHERE id_estado = '$estado' ORDER BY municipio";
	$resultadoM = $mysqli->query($queryM);
	
	$queryL = "SELECT id_localidad, localidad FROM t_localidad WHERE id_municipio = '$municipio' ORDER BY localidad";
	$resultadoL = $mysqli->query($queryL);
?>

<html>
	<head>
		<title>ComboBox Ajax, PHP y MySQL</title>
		
		<script language="javascript" src="js/jquery-3.1.1.min.js"></script>
		
		<script language="javascript">
			$(document).ready(function(){
				$("#cbx_estado").change(function () {
					
					$('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
					
					$("#cbx_estado option:selected").each(function () {
						id_estado = $(this).val();
						$.post("includes/getMunicipio.php", { id_estado: id_estado }, function(data){
							$("#cbx_municipio").html(data);
						});            
					});
				})
			});
			
			$(document).ready(function(){
				$("#cbx_municipio").change(function () {
					$("#cbx_municipio option:selected").each(function () {
						id_municipio = $(this).val();
						$.post("includes/getLocalidad.php", { id_municipio: id_municipio }, function(data){
							$("#cbx_localidad").html(data);
						});            
					});
				})
			});
		</script>
		
	</head>
	
	<body>
		<form id="combo" name="combo" action="update.php" method="POST">
			
			Selecciona Estado : <select name="cbx_estado" id="cbx_estado">
				<option value="0">...</option>
				<?php while($rowE = $resultadoE->fetch_assoc()) { ?>
					<option value="<?php echo $rowE['id_estado']; ?>" <?php if($rowE['id_estado']==$estado) { echo 'selected'; } ?>><?php echo $rowE['estado']; ?></option>
				<?php } ?>
			</select>
			
			<br />
			
			Selecciona Municipio : <select name="cbx_municipio" id="cbx_municipio">
				<?php while($rowM = $resultadoM->fetch_assoc()) { ?>
					<option value="<?php echo $rowM['id_municipio']; ?>" <?php if($rowM['id_municipio']==$municipio) { echo 'selected'; } ?>><?php echo $rowM['municipio']; ?></option>
				<?php } ?>
			</select>
			
			<br />
			
			Selecciona Localidad : <select name="cbx_localidad" id="cbx_localidad">
				<?php while($rowL = $resultadoL->fetch_assoc()) { ?>
					<option value="<?php echo $rowL['id_localidad']; ?>" <?php if($rowL['id_localidad']==$localidad) { echo 'selected'; } ?>><?php echo $rowL['localidad']; ?></option>
				<?php } ?>
			</select>
			<br />
			<input type="submit" id="enviar" name="enviar" value="Guardar" />
		</form>
	</body>
</html>
