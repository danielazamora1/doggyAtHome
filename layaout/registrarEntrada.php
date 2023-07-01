<br><?php 
	include('conexion.php');

	$cantidadEntrada = $_POST['cantidadEntrada'];
	$articulos = $_POST['articulos'];
	$entradas = $_POST['entradas'];

	$consulta = "CALL pa_registrar_entradas('$cantidadEntrada','$articulos','$entradas')";

	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location: entradas.php");
	} else{
		include('interfazRegistrarEntrada.php');
	}
	
	
?>
