		<!doctype html>
		<html lang="en">
		<head>
			
			<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
			<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>public/img/apple-icon.png" />
			<link rel="icon" type="image/png" href="<?php echo base_url();?>public/img/favicon.png" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

			<title>ASENAR</title>

			<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		    <meta name="viewport" content="width=device-width" />

		    <!-- Bootstrap core CSS     -->
		    <link href="<?php echo base_url();?>public/css/bootstrap.min.css" rel="stylesheet" />

		    <!--  Material Dashboard CSS    -->
		    <link href="<?php echo base_url();?>public/css/material-dashboard.css" rel="stylesheet"/>

		    <!--  CSS for Demo Purpose, don't include it in your project     -->
		    <link href="<?php echo base_url();?>public/css/demo.css" rel="stylesheet" />

		    <!--     Fonts and icons     -->
		    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
		    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
		</head>
		<body style="background: 
    background: background: background: rgba(210,255,82,1);
background: -moz-linear-gradient(left, rgba(210,255,82,1) 0%, rgba(145,232,66,0.45) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(210,255,82,1)), color-stop(100%, rgba(145,232,66,0.45)));
background: -webkit-linear-gradient(left, rgba(210,255,82,1) 0%, rgba(145,232,66,0.45) 100%);
background: -o-linear-gradient(left, rgba(210,255,82,1) 0%, rgba(145,232,66,0.45) 100%);
background: -ms-linear-gradient(left, rgba(210,255,82,1) 0%, rgba(145,232,66,0.45) 100%);
background: linear-gradient(to right, rgba(210,255,82,1) 0%, rgba(145,232,66,0.45) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d2ff52', endColorstr='#91e842', GradientType=1 );
">
			<div class="wrapper">
			    <div class="sidebar" data-color="orange" data-image="<?php echo base_url();?>public/img/sidebar-1.jpg">
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
			                    <a href="#">
			                        <i class="material-icons">store</i>
	                        <p>Inicio</p>
	                    </a>
	                </li>
	                 <li>
	                     <li role="presentation" class="dropdown ">	             
	                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">	      
	                    	<i class="material-icons">person</i>
	                        Gestioinar Productos <span class="caret"></span>
	                    </a>
	                    	<ul class="dropdown-menu">
	                        	<li role="presentation"><a href="<?php echo base_url()?>productos">Ver Productos</a></li>
	                        	</a> </li>	
	                        	<li  role="presentation"><a href="<?php echo base_url()?>productos/add">Agregar Productos</a></li>
	                        </ul>
	                    </a>
	                </li>
	                 	<a  href="<?php echo base_url()?>addCategorias">	      
	                    	<i style="margin-left: 30px; " class="material-icons">more</i>
	                        <p style="color: #3C4858">Gestioinar Productos </p>
	                    </a>
	                <li>	                
	                    <a href="">
	                        <i class="material-icons">people</i>
	                        <p>Gestionar Personas</p>
	                    </a>
	                </li>
	                
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"></a>
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

								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">Bienvenido <?php echo $this->session->userdata('Nombre') ?>
	 							   <i class="material-icons">person</i>
	 							   <p class="hidden-lg hidden-md"></p>

	 						   </a>
	 						   <ul class="dropdown-menu">
									<li><a href="<?php echo base_url()?>acceso/salir">Cerrar Sesión</a></li>
					
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

	<!--Variable para Imprimir el contenido de la Vista -->
	<?php echo $content_for_layout;?>
	                                    

			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul>
							<li>
								<a href="#">
									Menu
								</a>
							</li>
							<li>
								<a href="#">
									Nosotros
								</a>
							</li>
							<li>
								<a href="#">
									Servicios
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
						&copy; <a href="#!">ASENAR</a>, ADSI - 1134021
					</p>
				</div>
			</footer>
		</div>
	</div>

</body>

<!--   Core JS Files   -->
	<script src="<?php echo base_url();?>public/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>public/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>public/js/material.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>public/js/funciones.js" type="text/javascript"></script>

	<!--  Charts ../../ugin -->
	<script src="<?php echo base_url();?>public/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="<?php echo base_url();?>public/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="<?php echo base_url();?>public/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url();?>public/js/demo.js"></script>


	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

</html>
