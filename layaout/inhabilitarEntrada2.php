<?php  
	include('conexion.php');

	$id = $_POST['id'];
	
	$consulta = "CALL pa_inhabilitar_entrada('$id')";
	$resultado = mysqli_query($conexion,$consulta);
	header("location:entradas.php");
	mysqli_free_result($resultado);
	
	mysqli_close($conexion);
?>