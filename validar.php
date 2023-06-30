<?php  
	include('conexion.php');

	$usuario = $_POST['usuario'];
	$contraseña = $_POST['contraseña'];
	$admin = isset($_POST['admin']);
	$adoptante = isset($_POST['adoptante']);
	session_start();
	$_SESSION['usuario']=$usuario;

	if ($admin) {
	$consulta="SELECT * FROM usuario where usuario='$usuario' and contraseña = '$contraseña'";
	$resultado=mysqli_query($conexion,$consulta);

	$filas=mysqli_fetch_array($resultado);

		if ($filas['rol_idRol']==1) //administrador
		{
		header('location:layaout/index.html');
		mysqli_free_result($resultado);
		}if ($filas['rol_idRol']==2)//veterinario		
		{
		header("location:layaoutVeterinario/index.html");
		mysqli_free_result($resultado);
		}
		else {
		include("login.html");
		?>
		<?php
		}
		mysqli_close($conexion);
	}
	if ($adoptante) {
	$consulta="SELECT * FROM adoptante where usuario='$usuario' and contraseña = '$contraseña'";
	$resultado=mysqli_query($conexion,$consulta);

	$filas=mysqli_fetch_array($resultado);
	if ($filas) //adoptante
		{
		header("location:layaoutAdoptante/index.html");
		}else {
		include("login.html");
		?>
		<?php
		}
		mysqli_free_result($resultado);
		}
		mysqli_close($conexion);
	?>	
