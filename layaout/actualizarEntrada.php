<?php  
	include('conexion.php');

	$id = $_POST['id'];
	$cantidadEntrada = $_POST['cantidadEntrada'];
	$articulos = $_POST['articulos'];
	$entradas = $_POST['entradas'];
	$estadoEntrada = $_POST['estadoEntrada'];

	$consulta = "CALL pa_actualizar_entradas('$cantidadEntrada', 
	'$articulos','$entradas', '$estadoEntrada' ,'$id')";
	$resultado= mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location:entradas.php");
	} else{
		include('interfazEditarEntrada.php');
	}
?>