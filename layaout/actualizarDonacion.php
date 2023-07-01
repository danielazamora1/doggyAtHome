<?php  
	include('conexion.php');

	$id = $_POST['id'];
	$tipoDonacion = $_POST['tipoDonacion'];
	$adoptante = $_POST['adoptante'];
	$referencia = $_POST['referencia'];
	$cantidadDonacion = $_POST['cantidadDonacion'];
	$fechaDonacion = $_POST['fechaDonacion'];
	$estado = $_POST['estado'];

	$consulta = "CALL pa_actualizar_donacion('$tipoDonacion','$adoptante','$referencia', 
	'$cantidadDonacion', '$fechaDonacion', '$estado','$id')";
	$resultado= mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location:listaDonaciones.php");
	} else{
		include('editarDonacion.php');
	}
?>