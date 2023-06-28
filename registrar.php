<?php 
	include('conexion.php');

	$correo = $_POST['correo'];
	$usuario = $_POST['usuario'];
	$contraseña = $_POST['contraseña'];
	$confirmarContraseña = $_POST['confirmarContraseña'];
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$tipoDocumento = isset($_POST['tipoDocumento']) ? $_POST['tipoDocumento'] : 0;
	$documento = $_POST['documento'];
	$celular = $_POST['celular'];
	$direccion = $_POST['direccion'];
	$ciudad = $_POST['ciudad'];

	if ($correo !=null || $usuario !=null || $contraseña !=null || $confirmarContraseña !=null || $nombres !=null || 
		$apellidos !=null || $tipoDocumento !=null || $documento !=null || $celular !=null || $direccion !=null ||
		$ciudad !=null ||$contraseña==$confirmarContraseña) {
		$consulta = "INSERT INTO adoptante (correo, usuario, contraseña, confirmarContraseña,nombresAdoptante, 
	apellidosAdoptante, tipoDocumento, documento, celular, direccion, ciudad) values ('$correo', '$usuario', 
	'$contraseña', '$confirmarContraseña', '$nombres', '$apellidos', '$tipoDocumento', '$documento', 
	'$celular', '$direccion', '$ciudad')";

	$resultado= mysqli_query($conexion,$consulta);
	header("location:login.html");
	mysqli_free_result($resultado);
	?>
	<h1>Registro guardado</h1>
	<?php
	} else{
		include("register.html");
		?>
		
		<?php
	}
	mysqli_close($conexion);
	
?>

