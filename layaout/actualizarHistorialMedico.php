<?php  
	include('conexion.php');

	$id = $_POST['id'];
	$fecha = $_POST['fecha'];
	$diagnostico = $_POST['diagnostico'];
	$mascota = $_POST['mascota'];
    $usuario = $_POST['usuario'];
    $estadoHistorialMedico = $_POST['estadoHistorialMedico'];

	$consulta = "CALL pa_actualizar_historialMedico('$fecha', 
	'$diagnostico', '$mascota','$usuario', '$estadoHistorialMedico', '$id')";
	$resultado= mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location: historialMedico.php");
	} else{
		include('editarHistorialMedico.php');
	}
?>