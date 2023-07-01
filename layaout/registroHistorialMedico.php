<br><?php 
	include('conexion.php');

	$fecha = $_POST['fecha'];
	$diagnostico = $_POST['diagnostico'];
	$nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];

	$consulta = "CALL pa_registrar_historialMedico('$fecha','$diagnostico','$nombre', '$usuario')";

	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location: historialMedico.php");
	} else{
		include('interfazRegistroHistorialMedico.php');
	}
	
?>