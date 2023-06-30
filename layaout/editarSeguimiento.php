

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Editar seguimiento proceso</title>

	<!-- Site favicon -->
	<link rel="website icon" href="vendors/images/seguimientoProceso.png">

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
						<a class="dropdown-item" href="/index.html"><i class="dw dw-logout"></i> Cerrar Sesion</a>
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
							<span class="micon dw dw-library"></span><span class="mtext">Usuarios</span>
						</a>
						<ul class="submenu">
							<li><a href="usuarios.html">Gestión de usuarios</a></li>
						</ul>
						<ul class="submenu">
							<li><a href="adoptantes.html">Gestión de adoptantes</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Adopciones</span>
						</a>
						<ul class="submenu">
							<li><a href="listaAdopciones.html">Lista de adopciones</a></li>
							<li><a href="mascota.html">Mascota</a></li>
							<li><a href="listaMascotas.html">Lista Mascotas</a></li>
							<li><a href="historialMedico.html">Historial Medico</a></li>
							<li><a href="listaSolicitudes.html">Lista de solicitudes</a></li>
							<li><a href="seguimientoProceso.html">Seguimiento de proceso</a></li>
	
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Donaciones</span>
						</a>
						<ul class="submenu">
							<li><a href="listaDonaciones.html">Lista de donaciones</a></li>
						</ul>
					</li>
				
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-apartment"></span><span class="mtext"> Inventario </span>
						</a>
						<ul class="submenu">
							<li><a href="consultarInventario.html">Consultar Inventario</a></li>
							<li><a href="listaArticulos.html">Lista de articulos</a></li>
							
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
								<h4>Editar seguimiento de proceso</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
									<li class="breadcrumb-item"><a href="seguimientoProceso.php">Seguimiento de proceso</a></li>
									<li class="breadcrumb-item active" aria-current="page">Editar seguimiento de proceso</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Editar seguimiento de proceso</h4><br>
						</div>
						
					</div>
					<form action="actualizarSeguimiento.php" method="post">
						<?php 
							include('conexion.php');

							
							$sql = "SELECT * FROM seguimientoproceso WHERE idSeguimientoProceso =".$_GET['id'];
							$resultado = $conexion->query($sql);
							$row = $resultado->fetch_assoc();
						?>
						<input type="hidden" id="id" name="id" value="<?php echo $row['idSeguimientoProceso']; ?>"/>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Fase del seguimiento</label>
							<div class="col-sm-12 col-md-10">
								<select  class="custom-select col-12" name="faseDelSeguimiento">
									<option selected="">Selecciona</option>
									<option value="Fase 1"<?php if ($row['faseDelSeguimiento']=='Fase 1')echo 'selected'; ?>>Fase 1</option>
									<option value="Fase 2"<?php if ($row['faseDelSeguimiento']=='Fase 2')echo 'selected'; ?>>Fase 2</option>
									<option value="Fase 3"<?php if ($row['faseDelSeguimiento']=='Fase 3')echo 'selected'; ?>>Fase 3</option>
									<option value="Fase 4"<?php if ($row['faseDelSeguimiento']=='Fase 4')echo 'selected'; ?>>Fase 4</option>
									<option value="Fase 5"<?php if ($row['faseDelSeguimiento']=='Fase 5')echo 'selected'; ?>>Fase 5</option>
									<option value="Fase 6"<?php if ($row['faseDelSeguimiento']=='Fase 6')echo 'selected'; ?>>Fase 6</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Estado</label>
							<div class="col-sm-12 col-md-10">
								<select  class="custom-select col-12" name="estado">
									<option selected="">Selecciona</option>
									<option value="En proceso"<?php if ($row['estado']=='En proceso')echo 'selected'; ?>>En proceso</option>
									<option value="Terminado"<?php if ($row['estado']=='Terminado')echo 'selected'; ?>>Terminado</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Fecha</label>
							<div class="col-sm-12 col-md-10">
								<input  class="form-control" type="datetime-local" id="fecha" name="fecha" value="<?php echo $row['fecha'];?>"required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Número de solicitud</label>
							<div class="col-sm-12 col-md-10">
								<select  class="custom-select col-12" name="numeroSolicitud">
								<?php  
								include('conexion.php');

								$sql = "SELECT * FROM solicitudadopcion WHERE idSolicitudAdopcion =".$row['solicitudAdopcion_idSolicitudAdopcion'];
								$resultado1 = mysqli_query($conexion,$sql);
								$row1 = $resultado1->fetch_array(MYSQLI_ASSOC);
								echo "<option value='".$row1['idSolicitudAdopcion']."'>".$row1['idSolicitudAdopcion']."</option>";

								$sql2 = "SELECT * FROM solicitudadopcion";
								$resultado2 = mysqli_query($conexion,$sql2);
								while ($fila = $resultado2->fetch_array()) {
									echo "<option value='".$fila['idSolicitudAdopcion']."'>".$fila['idSolicitudAdopcion']."</option>";
								}

								?>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Estado del usuario</label>
							<div class="col-sm-12 col-md-10">
								<select  class="custom-select col-12" name="estadoSeguimiento">
									<option selected="">Selecciona</option>
									<option value="Activo"<?php if ($row['estadoSeguimiento']=='Activo')echo 'selected'; ?>>Activo</option>
									<option value="Inactivo"<?php if ($row['estadoSeguimiento']=='Inactivo')echo 'selected'; ?>>Inactivo</option>
								</select>
							</div>
						</div> 	
						<input type="submit" name="" value="Editar" class="btn btn-primary">
                            
					</form>
					<a href="entradas.php"><button style="border-color: brown; background-color: brown;" class="btn btn-primary">Cancelar</button></a>


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