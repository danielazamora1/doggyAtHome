<?php  
	include('conexion.php');

	$id = $_POST['id'];
	$cantidadSalidas = $_POST['cantidadSalidas'];
	$articulos = $_POST['articulos'];
	$salidas = $_POST['salidas'];


	$consulta = "UPDATE salidas_articulos SET cantidadSalidas='$cantidadSalidas', 
	articulos_idArticulos='$articulos', salidas_idSalidas='$salidas' WHERE idSalidasArticulos= '$id'";
	$resultado= mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location:salidas.php");
	} else{
		include('interfazEditarSalida.php');
	}
?>