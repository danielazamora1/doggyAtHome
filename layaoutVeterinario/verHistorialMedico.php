<?php  
	require 'conexion.php';

	$id = $_GET['id'];

	$sql = "SELECT * FROM historialmedico WHERE idHistorialMedico = '$id'";
	$resultado = mysqli_query($conexion,$sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Consultar Articulo</title>

	<!-- Site favicon -->
	<link rel="website icon" href="vendors/images/editarEntradas.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>

		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>Admin</h3>
										<p>Tu proceso de adopción ha cambiado de estado</p>
									</a>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="vendors/images/photo1.jpg" alt="">
						</span>
						<span class="user-name">Usuario</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Perfil</a>					
						<a class="dropdown-item" href="../index.html"><i class="dw dw-logout"></i> Cerrar Sesion</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="vendors/images/logoLigth.png" style="height: 50px; width: 50px; margin-right: 1rem;" alt="" class="dark-logo">
				<img src="vendors/images/logoDark.png" style="height: 50px; width: 50px; margin-right: 1rem;"alt="" class="light-logo" >
				<h3 style="font-size: 20px; color: #17a2b8;">Doggy At Home</h3>
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Adopciones</span>
						</a>
						<ul class="submenu">
							<li><a href="listaAdopciones.php">Lista de adopciones</a></li>
							<li><a href="mascota.html">Mascota</a></li>
							<li><a href="listaMascotas.php">Lista de mascota</a></li>
							<li><a href="historialMedico.php">Historial Medico</a></li>
							<li><a href="listaSolicitudes.php">Lista de solicitudes</a></li>
							<li><a href="seguimientoProceso.php">Seguimiento de proceso</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-apartment"></span><span class="mtext"> Inventario </span>
						</a>
						<ul class="submenu">
							<li><a href="consultarInventario.php">Consultar Inventario</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Consultar registro</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
									<li class="breadcrumb-item"><a href="historialMedico.php">Historial Medico</a></li>
									<li class="breadcrumb-item active" aria-current="page">Consultar registro</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Consultar registro </h4><br>
						</div>
						
					</div>
					<form>
					<?php 
							include('conexion.php');

							$sql = "SELECT * FROM historialmedico WHERE idHistorialMedico =".$_GET['id'];
							$resultado = $conexion->query($sql);
							$row = $resultado->fetch_assoc();
						?>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Fecha</label>
							<div class="col-sm-12 col-md-10">
								<input disabled class="form-control" type="datetime-local" id="fecha" name="fecha" value="<?php echo $row['fecha'];?>"required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Diagnostico</label>
							<div class="col-sm-12 col-md-10">
								<input disabled class="form-control" type="text" id="diagnostico" name="diagnostico" placeholder="diagnostico" value="<?php echo $row['diagnostico'];?>">
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Mascota</label>
							<div class="col-sm-12 col-md-10">
								<select disabled class="custom-select col-12" name="mascota">
								<?php  

								include('conexion.php');

								$sql = "SELECT * FROM mascota WHERE idMascota =".$row['mascota_idMascota'];
								$resultado1 = mysqli_query($conexion,$sql);
								$row1 = $resultado1->fetch_array(MYSQLI_ASSOC);
								echo "<option value='".$row1['idMascota']."'>".$row1['nombre']."</option>";

								$sql2 = "SELECT * FROM mascota";
								$resultado2 = mysqli_query($conexion,$sql2);
								while ($fila = $resultado2->fetch_array()) {
									echo "<option value='".$fila['idMascota']."'>".$fila['nombre']."</option>";
								}

								?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Veterinario</label>
							<div class="col-sm-12 col-md-10">
								<select disabled class="custom-select col-12" name="usuario">
								<?php  
								include('conexion.php');

								$sql = "SELECT * FROM usuario WHERE idUsuario =".$row['usuario_idUsuario'];
								$resultado1 = mysqli_query($conexion,$sql);
								$row1 = $resultado1->fetch_array(MYSQLI_ASSOC);
								echo "<option value='".$row1['idUsuario']."'>".$row1['nombres']."</option>";

								$sql2 = "SELECT * FROM usuario";
								$resultado2 = mysqli_query($conexion,$sql2);
								while ($fila = $resultado2->fetch_array()) {
									echo "<option value='".$fila['idUsuario']."'>".$fila['nombres']."</option>";
								}
								?>
								</select>
							</div>
						</div> 
                        
					</form>
<a href="historialMedico.php"><button class="btn btn-primary">Volver</button></a>


</form>
				<!-- Input Validation End -->
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				Doggy At Home <a href="#" target="_blank">All Rights Reserved.</a>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>