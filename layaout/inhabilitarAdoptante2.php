<?php  
	include('conexion.php');

	$id = $_POST['id'];
	
	$consulta = "CALL pa_inhabilitar_adoptante('$id')";
	$resultado = mysqli_query($conexion,$consulta);
	header("location:adoptantes.php");
	mysqli_free_result($resultado);
	
	mysqli_close($conexion);
?>