<br><?php 
	include('conexion.php');

	$fecha = $_POST['fecha'];
	$diagnostico = $_POST['diagnostico'];
	$nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $estadoHistorialMedico = $_POST['estadoHistorialMedico'];

	$consulta = "INSERT INTO historialmedico(fecha, diagnostico, mascota_idMascota, usuario_idUsuario, estadoHistorialMedico) 
	VALUES ('$fecha','$diagnostico','$nombre', '$usuario', '$estadoHistorialMedico')";

	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location: historialMedico.php");
	} else{
		include('interfazRegistroHistorialMedico.php');
	}
	
?>