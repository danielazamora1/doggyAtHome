<?php  
	include('conexion.php');

	$id = $_POST['id'];
	$faseDelSeguimiento = $_POST['faseDelSeguimiento'];
	$estado = $_POST['estado'];
	$fecha = $_POST['fecha'];
	$numeroSolicitud = $_POST['numeroSolicitud'];
	$estadoSeguimiento = $_POST['estadoSeguimiento'];


	$consulta = "UPDATE seguimientoproceso SET faseDelSeguimiento='$faseDelSeguimiento', 
	estado='$estado', fecha='$fecha',  solicitudAdopcion_idSolicitudAdopcion='$numeroSolicitud', estadoSeguimiento='$estadoSeguimiento' 
	WHERE idSeguimientoProceso= '$id'";
	$resultado= mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location:seguimientoProceso.php");
	} else{
		include('editarSeguimiento.php');
	}
?>