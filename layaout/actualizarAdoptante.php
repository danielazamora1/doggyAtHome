<?php 
	include('conexion.php');

	$id = $_POST['id'];
	$nombresAdoptante = $_POST['nombresAdoptante'];
	$apellidosAdoptante = $_POST['apellidosAdoptante'];
	$tipoDocumento = $_POST['tipoDocumento'];
	$documento = $_POST['documento'];
	$usuario = $_POST['usuario'];
	$contraseña = $_POST['contraseña'];
	$confirmarContraseña = $_POST['confirmarContraseña'];
	$celular = $_POST['celular'];
	$ciudad = $_POST['ciudad'];
	$direccion = $_POST['direccion'];
	$correo = $_POST['correo'];
	$estadoAdoptante = $_POST['estadoAdoptante'];

	if ($nombresAdoptante !=null || $apellidosAdoptante !=null || $tipoDocumento !=null || $documento !=null || $usuario !=null || 
		$contraseña !=null || $confirmarContraseña !=null || $celular !=null || 
		$ciudad !=null || $direccion !=null  || $correo !=null || $rol !=null || $estadoAdoptante !=null   ||$contraseña==$confirmarContraseña) {
		$consulta = "CALL pa_actualizar_adoptante ('$nombresAdoptante', '$apellidosAdoptante', 
		'$tipoDocumento', '$documento', '$usuario', '$contraseña','$confirmarContraseña','$celular',
		'$ciudad','$direccion','$correo', '$estadoAdoptante','$id')";

	$resultado= mysqli_query($conexion,$consulta);
	header("location:adoptantes.php");
	mysqli_free_result($resultado);
	?>
	<h1>Registro guardado</h1>
	<?php
	} else{
		include("editarAdoptante.php");
		?>
		
		<?php
	}
	mysqli_close($conexion);
	
?>
