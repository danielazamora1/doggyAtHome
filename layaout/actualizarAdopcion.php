<?php  
	include('conexion.php');

	$id = $_POST['id'];
	$fecha = $_POST['fecha'];
	$mascota = $_POST['mascota'];
	$adoptante = $_POST['adoptante'];
	$estado = $_POST['estado'];

	$consulta = "CALL pa_actualizar_adopcion('$fecha','$mascota','$adoptante','$estado','$id')";
	$resultado= mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location:listaAdopciones.php");
	} else{
		include('editarAdopciones.php');
	}
?>