<?php  
	include('conexion.php');

	$id = $_POST['id'];
	$cantidadSalidas = $_POST['cantidadSalidas'];
	$articulos = $_POST['articulos'];
	$salidas = $_POST['salidas'];
	$estadoSalida = $_POST['estadoSalida'];

	$consulta = "CALL pa_actualizar_salidas('$cantidadSalidas', 
	'$articulos', '$salidas', '$estadoSalida','$id')";
	$resultado= mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location:salidas.php");
	} else{
		include('interfazEditarSalida.php');
	}
?>