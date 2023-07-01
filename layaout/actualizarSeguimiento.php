<?php  
	include('conexion.php');

	$id = $_POST['id'];
	$faseDelSeguimiento = $_POST['faseDelSeguimiento'];
	$estado = $_POST['estado'];
	$fecha = $_POST['fecha'];
	$numeroSolicitud = $_POST['numeroSolicitud'];
	$estadoSeguimiento = $_POST['estadoSeguimiento'];


	$consulta = "CALL pa_actualizar_seguimientoProceso('$faseDelSeguimiento', '$estado','$fecha',
	'$numeroSolicitud','$estadoSeguimiento','$id')";
	$resultado= mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location:seguimientoProceso.php");
	} else{
		include('editarSeguimiento.php');
	}
?>