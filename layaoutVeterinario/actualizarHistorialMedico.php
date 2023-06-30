<?php  
	include('conexion.php');

	$id = $_POST['id'];
	$fecha = $_POST['fecha'];
	$diagnostico = $_POST['diagnostico'];
	$mascota = $_POST['mascota'];
    $usuario = $_POST['usuario'];
    $estadoHistorialMedico = $_POST['estadoHistorialMedico'];

	$consulta = "UPDATE historialmedico SET fecha='$fecha', 
	diagnostico='$diagnostico', mascota_idMascota='$mascota', usuario_idUsuario='$usuario', estadoHistorialMedico='$estadoHistorialMedico' WHERE idHistorialMedico= '$id'";
	$resultado= mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location: historialMedico.php");
	} else{
		include('editarHistorialMedico.php');
	}
?>