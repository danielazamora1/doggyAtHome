<br><?php 
	include('conexion.php');

	$fechaSolicitud = $_POST['fechaSolicitud'];
	$estado = $_POST['estado'];
	$documentoSolicitudAdopcion = $_POST['documentoSolicitudAdopcion'];
    $mascota = $_POST['mascota'];
    
		$consulta = "CALL pa_registrar_solicitudAdopcion ('$estado', '$fechaSolicitud', 
		'$documentoSolicitudAdopcion', '$mascota')";


	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location: listaSolicitudes.php");
	} else{
		include('interfazRegistroSolicitud.php');
	}
	
?>

