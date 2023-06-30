<br><?php 
	include('conexion.php');

	$tipoDonacion = $_POST['tipoDonacion'];
	$adoptante = $_POST['adoptante'];
	$referencia = $_POST['referencia'];
	$cantidadDonacion = $_POST['cantidadDonacion'];
	$fechaDonacion = $_POST['fechaDonacion'];

	$consulta = "INSERT INTO donaciones(tipoDonacion_idTipoDonacion, adoptante_idAdoptante, referencia, cantidadDonacion, fechaDonacion) 
	VALUES ('$tipoDonacion','$adoptante','$referencia', '$cantidadDonacion', '$fechaDonacion')";

	$resultado = mysqli_query($conexion,$consulta);

	if ($resultado) {
		header("location: listaDonaciones.php");
	} else{
		include('registroDonacion.php');
	}
	
	
?>
