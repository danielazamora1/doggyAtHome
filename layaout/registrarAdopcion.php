<br><?php 
	include('conexion.php');

	$fecha = $_POST['fecha'];
<<<<<<< HEAD
	$nombre = $_POST['nombre'];
	$estadoPerfilMascota = $_POST['estadoPerfilMascota'];
	

	$consulta = "INSERT INTO adopciones(fecha, nombre, estadoPerfilMascota) 
	VALUES ('$fecha','$nombre','$estadoPerfilMascota')";
=======
	$mascota = $_POST['mascota'];
	$adoptante = $_POST['adoptante'];

	$consulta = "INSERT INTO adopciones(fecha, mascota_idMascota, adoptante_idAdoptante) 
	VALUES ('$fecha','$mascota','$adoptante')";
>>>>>>> 4c56775 (Se agrega el CRUD de lista de adopciones funcional)

	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado) {
<<<<<<< HEAD
		header("location: listaAdopciones.php")
		// code...
	} else {
		include('interfazRegistroAdopcion.php)
=======
		header("location: listaAdopciones.php");
	} else{
		include('registroAdopcion.php');
>>>>>>> 4c56775 (Se agrega el CRUD de lista de adopciones funcional)
	}
	
?>