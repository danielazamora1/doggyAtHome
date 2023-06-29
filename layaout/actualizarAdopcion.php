<?php  
	include('conexion.php');

	$id = $_POST['id'];
	$fecha = $_POST['fecha'];
	$mascota = $_POST['mascota'];
	$adoptante = $_POST['adoptante'];
	$estado = $_POST['estado'];

	$consulta = "UPDATE adopciones SET fecha='$fecha', 
	mascota_idMascota='$mascota', adoptante_idAdoptante='$adoptante', estadoAdopcion='$estado' 
	WHERE idAdopciones= '$id'";
	$resultado= mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location:listaAdopciones.php");
	} else{
		include('editarAdopciones.php');
	}
?>