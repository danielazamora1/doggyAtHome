<br><?php 
	include('conexion.php');

	$fechaSolicitud = $_POST['fechaSolicitud'];
	$estado = $_POST['estado'];
	$documentoSolicitudAdopcion = $_POST['documentoSolicitudAdopcion'];
    $mascota = $_POST['mascota'];
    $estadoSolicitud = $_POST['estadoSolicitud'];
    
		$consulta = "INSERT INTO solicitudadopcion (estado, fechaSolicitud, documentoSolicitudAdopcion, 
        mascota_idMascota, estadoSolicitud) values ('$estado', '$fechaSolicitud', 
		'$documentoSolicitudAdopcion', '$mascota', '$estadoSolicitud')";


	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location: listaSolicitudes.php");
	} else{
		include('interfazRegistroSolicitud.php');
	}
	
?>

