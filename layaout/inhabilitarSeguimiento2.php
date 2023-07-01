<?php  
	include('conexion.php');

	$id = $_POST['id'];
	
	$consulta = "CALL pa_inhabilitar_seguimientoProceso('$id')";
	$resultado = mysqli_query($conexion,$consulta);
	header("location:seguimientoProceso.php");
	mysqli_free_result($resultado);
	
	mysqli_close($conexion);
?>