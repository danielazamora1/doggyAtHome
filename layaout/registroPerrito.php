<br><?php 
	include('conexion.php');

	$nombre = $_POST['nombre'];
	$caracteristicas = $_POST['caracteristicas'];
	$estadoMascota = $_POST['estadoMascota'];
	$sexo = $_POST['sexo'];
	$fechaIngreso = $_POST['fechaIngreso'];
	$edad = $_POST['edad'];
	$fotoMascota = $_POST['fotoMascota'];
	$raza = $_POST['raza'];

	$consulta = "CALL pa_registrar_mascota ('$nombre','$caracteristicas','$estadoMascota', '$sexo', '$fechaIngreso', '$edad', '$fotoMascota','$raza')";
	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location: listaMascotas.php");
	} else{
		include('interfazRegistroPerrito.php');
	}
	
?>
