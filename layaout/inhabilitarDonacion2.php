<?php  
	include('conexion.php');

	$id = $_POST['id'];
	
	$consulta = "CALL pa_inhabilitar_donacion('$id')";
	$resultado = mysqli_query($conexion,$consulta);
	header("location:listaDonaciones.php");
	mysqli_free_result($resultado);
	
	mysqli_close($conexion);
?>