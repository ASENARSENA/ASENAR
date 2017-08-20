<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>public/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?= base_url()?>public/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ASENAR</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
   

    <!--  Material Dashboard CSS    -->
    <link href="<?= base_url()?>public/css/material-dashboard.css" rel="stylesheet"/>
 	
 	<link href="<?= base_url()?>public/css/bootstrap.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= base_url()?>public/css/demo.css" rel="stylesheet" />
	<link href="<?= base_url()?>public/css/miestilo.css" rel="stylesheet" />

	<?php echo load_bootstrap() ?>
    <!--     Fonts and icons     -->
    <link rel = "stylesheet" href = "http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="wrapper">
	    <div class="sidebar" data-color="orange" data-image="./assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="#!" class="simple-text">
					ASENAR
				</a>
				
			
			</div>
	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li>
	                    <a href="../gestinarempleado/inicioadmin.php">
	                        <i class="material-icons">store</i>
	                        <p>Inicio</p>
	                    </a>
	                </li>
	                <li >
	                    <a href="datospersonales.php">
	                        <i class="material-icons">person</i>
	                        <p>Pefil</p>
	                    </a>
	                </li>
	                  <li>
	                     <li role="presentation" class="dropdown ">	             
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">	      
	                    	<i class="material-icons">person</i>
	                        Gestioinar Productos <span class="caret"></span>
	                    </a>
	                    	<ul class="dropdown-menu">
	                        	<li role="presentation"><a href="<?php echo base_url()?>producto">Ver Productos</a></li>
	                        	</a> </li>	
	                        	<li  role="presentation"><a href="<?php echo base_url()?>producto/add">Agregar Productos</a></li>
	                        </ul>
	                    </a>
	                </li>
	                <li role="presentation" class="dropdown">	             
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	                    	<i class="material-icons">people</i>
	                    	Gestion de Empleados <span class="caret"></span>
	                        <ul class="dropdown-menu">
	                        	<li role="presentation"><a href="../personas/listarpersonas.php">Ver Empleado</a></li>
	                        	<li role="presentation"><a href="					registrarempleado.php">Agregar Empleado</a>
	                        	</li>
	                        </ul>
	                    </a>
	                </li>
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute" style="background:  rgba(249, 207, 1, 0.16);">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Bienvenido <?php //echo $_SESSION['user']; ?></a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">Dashboard</p>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">5</span>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You're now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
								</ul>
							</li>

							<li class="dropdown">

								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown" ><i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md"></p>

	 						   </a>
	 						   <ul class="dropdown-menu">
									<li><a href="../config/cerrar_sesion.php">Cerrar Sesión</a></li>
					
								</ul>

							</li>

						</ul>

						<form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
	                        	<input type="text" class="form-control" placeholder="Search">
	                        	<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
	                    </form>
					</div>
				</div>
			</nav>
			
			<?= $content_for_layout ?>

			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul>
							<li>
								<a href="#">
									Home
								</a>
							</li>
							<li>
								<a href="#">
									Company
								</a>
							</li>
							<li>
								<a href="#">
									Portfolio
								</a>
							</li>
							<li>
								<a href="#">
								   Blog
								</a>
							</li>
						</ul>
					</nav>
					<p class="copyright pull-right">
						&copy; <a href="#!"><strong> SENA</strong></a>, 1134021
					</p>
				</div>
			</footer>
		</div>
	</div>


<!--   Core JS Files   -->
	<script src="<?= base_url()?>public/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="<?= base_url()?>public/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?= base_url()?>public/js/material.min.js" type="text/javascript"></script>

	<!--  Charts ../../ugin -->
	<script src="<?= base_url()?>public/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="<?= base_url()?>public/js/bootstrap-notify.js"></script>
	
	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="<?= base_url()?>public/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?= base_url()?>public/js/demo.js"></script>


	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>
	<script type="text/javascript" src="<?= base_url()?>public/js/funciones.js"></script>

</body>
</html>
