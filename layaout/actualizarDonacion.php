<?php  
	include('conexion.php');

	$id = $_POST['id'];
	$tipoDonacion = $_POST['tipoDonacion'];
	$adoptante = $_POST['adoptante'];
	$referencia = $_POST['referencia'];
	$cantidadDonacion = $_POST['cantidadDonacion'];
	$fechaDonacion = $_POST['fechaDonacion'];
	$estado = $_POST['estado'];

	$consulta = "UPDATE donaciones SET tipoDonacion_idTipoDonacion='$tipoDonacion', 
	adoptante_idAdoptante='$adoptante', referencia='$referencia', cantidadDonacion='$cantidadDonacion', 
	fechaDonacion='$fechaDonacion', estadoDonacion='$estado' WHERE idDonaciones= '$id'";
	$resultado= mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location:listaDonaciones.php");
	} else{
		include('editarDonacion.php');
	}
?>