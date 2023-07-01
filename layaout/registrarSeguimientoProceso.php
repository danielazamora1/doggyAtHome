<br><?php 
	include('conexion.php');

	$faseDelSeguimiento = $_POST['faseDelSeguimiento'];
	$estado = $_POST['estado'];
	$fecha = $_POST['fecha'];
	$numeroSolicitud = $_POST['numeroSolicitud'];

	$consulta = "CALL pa_registrar_seguimientoProceso ('$faseDelSeguimiento','$estado','$fecha', '$numeroSolicitud')";

	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location: seguimientoProceso.php");
	} else{
		include('registroSeguimiento.php');
	}
	
?>