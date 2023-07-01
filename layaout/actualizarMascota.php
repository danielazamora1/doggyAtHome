<?php 
	include('conexion.php');

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$caracteristicas = $_POST['caracteristicas'];
	$estadoMascota = $_POST['estadoMascota'];
	$sexo = $_POST['sexo'];
	$fechaIngreso = $_POST['fechaIngreso'];
	$edad = $_POST['edad'];
	$raza = $_POST['raza'];
	$estadoPerfilMascota = $_POST['estadoPerfilMascota'];
	

	if ($nombre !=null || $caracteristicas !=null || $estadoMascota !=null || $sexo !=null || $fechaIngreso !=null || $edad !=null || $raza !=null || $estadoPerfilMascota !=null) {
		$consulta = "CALL pa_actualizar_mascota('$nombre', '$caracteristicas','$estadoMascota', 
		'$sexo', '$fechaIngreso','$edad', '$raza', 
		'$estadoPerfilMascota','$id')";

	$resultado= mysqli_query($conexion,$consulta);
	header("location:listaMascotas.php");
	mysqli_free_result($resultado);
	?>
	<h1>Registro guardado</h1>
	<?php
	} else{
		include("editarRegistroPerrito.php");
		?>
		
		<?php
	}
	mysqli_close($conexion);
	
?>
