<?php  
	include('conexion.php');

	$id = $_POST['id'];
	
	$consulta = "CALL pa_inhabilitar_historialMedico('$id')";
	$resultado = mysqli_query($conexion,$consulta);
	header("location:historialMedico.php");
	mysqli_free_result($resultado);
	
	mysqli_close($conexion);
?>