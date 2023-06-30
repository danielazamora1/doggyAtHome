<?php  
	include('conexion.php');

	$id = $_POST['id'];
	$estado = $_POST['estado'];
	$fechaSolicitud = $_POST['fechaSolicitud'];
	$mascota = $_POST['mascota'];
	$documentoSolicitudAdopcion = $_POST['documentoSolicitudAdopcion'];
    $estadoSolicitud = $_POST['estadoSolicitud'];

	$consulta = "UPDATE solicitudadopcion SET estado='$estado', fechaSolicitud='$fechaSolicitud', 
	mascota_idMascota='$mascota', documentoSolicitudAdopcion='$documentoSolicitudAdopcion', estadoSolicitud='$estadoSolicitud' 
	WHERE idSolicitudAdopcion= '$id'";

	$resultado= mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location:listaSolicitudes.php");
	} else{
		include('editarSolicitud.php');
	}
?>