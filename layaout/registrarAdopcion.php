<br><?php 
	include('conexion.php');

	$fecha = $_POST['fecha'];
	$mascota = $_POST['mascota'];
	$adoptante = $_POST['adoptante'];

	$consulta = "INSERT INTO adopciones(fecha, mascota_idMascota, adoptante_idAdoptante) 
	VALUES ('$fecha','$mascota','$adoptante')";

	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location: listaAdopciones.php");
	} else{
		include('registroAdopcion.php');
	}
	
?>