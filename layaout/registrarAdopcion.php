<br><?php 
	include('conexion.php');

	$fecha = $_POST['fecha'];
	$nombre = $_POST['nombre'];
	$estadoPerfilMascota = $_POST['estadoPerfilMascota'];
	

	$consulta = "INSERT INTO adopciones(fecha, nombre, estadoPerfilMascota) 
	VALUES ('$fecha','$nombre','$estadoPerfilMascota')";

	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location: listaAdopciones.php")
		// code...
	} else {
		include('interfazRegistroAdopcion.php)
	}
	
?>