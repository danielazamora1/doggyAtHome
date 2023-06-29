<br><?php 
	include('conexion.php');

	$id = $_POST['id'];
	$nombreArticulo = $_POST['nombreArticulo'];
	$descripcionArticulo = $_POST['descripcionArticulo'];
	$referenciaArticulo = $_POST['referenciaArticulo'];
	$stock = $_POST['stock'];
	$estadoArticulo = $_POST['estadoArticulo'];

	if ($nombreArticulo !=null || $descripcionArticulo !=null || $referenciaArticulo !=null || $stock !=null || $estadoArticulo !=null) {
		$consulta = "UPDATE articulos SET nombreArticulo = '$nombreArticulo', descripcionArticulo = '$descripcionArticulo', 
		referenciaArticulo = '$referenciaArticulo', stock = '$stock', estadoArticulo = '$estadoArticulo' WHERE idArticulos = '$id'";

	$resultado= mysqli_query($conexion,$consulta);
	header("location:listaArticulos.php");
	mysqli_free_result($resultado);
	?>
	<h1>Registro guardado</h1>
	<?php
	} else{
		include("editarArticulo.php");
		?>
		
		<?php
	}
	mysqli_close($conexion);
	
?>

