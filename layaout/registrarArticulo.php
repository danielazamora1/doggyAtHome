<br><?php 
	include('conexion.php');

	$nombreArticulo = $_POST['nombreArticulo'];
	$descripcionArticulo = $_POST['descripcionArticulo'];
	$referenciaArticulo = $_POST['referenciaArticulo'];
	$stock = $_POST['stock'];

	if ($nombreArticulo !=null || $descripcionArticulo !=null || $referenciaArticulo !=null || $stock !=null) {
		$consulta = "INSERT INTO articulos (nombreArticulo, descripcionArticulo, referenciaArticulo, stock) values ('$nombreArticulo', 
		'$descripcionArticulo', '$referenciaArticulo', '$stock')";

	$resultado= mysqli_query($conexion,$consulta);
	header("location:listaArticulos.php");
	mysqli_free_result($resultado);
	?>
	<h1>Registro guardado</h1>
	<?php
	} else{
		include("registrarArticulo.html");
		?>
		
		<?php
	}
	mysqli_close($conexion);
	
?>

