<?php  
	include('conexion.php');

	$id = $_POST['id'];
	
	$consulta = "CALL pa_inhabilitar_mascota('$id')";
	$resultado = mysqli_query($conexion,$consulta);
	header("location:listaMascotas.php");
	mysqli_free_result($resultado);
	
	mysqli_close($conexion);
?>