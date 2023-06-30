<br><?php 
	include('conexion.php');

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

	if ($nombresAdoptante !=null || $apellidosAdoptante !=null || $tipoDocumento !=null || $documento !=null || $usuario !=null || 
		$contraseña !=null || $confirmarContraseña !=null || $celular !=null || 
		$ciudad !=null || $direccion !=null  || $correo !=null ||$contraseña==$confirmarContraseña) {
		$consulta = "CALL pa_registrar_adoptante('$nombresAdoptante', '$apellidosAdoptante', 
		'$tipoDocumento', '$documento', '$usuario', '$contraseña', '$confirmarContraseña', '$celular', 
		'$ciudad', '$direccion', '$correo')";
	$resultado= mysqli_query($conexion,$consulta);
	header("location:adoptantes.php");
	mysqli_free_result($resultado);
	?>
	<h1>Registro guardado</h1>
	<?php
	} else{
		include("registroAdoptante.html");
		?>
		
		<?php
	}
	mysqli_close($conexion);
	
?>

