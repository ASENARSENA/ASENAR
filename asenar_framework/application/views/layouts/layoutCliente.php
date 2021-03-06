		<!doctype html>
		<html lang="en">
		<head>
			 
			<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
			<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>public/img/apple-icon.png" />
			<link rel="icon" type="image/png" href="<?php echo base_url();?>public/img/iconm.png" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

			<title>ASENAR</title>

			<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		    <meta name="viewport" content="width=device-width" />

		    <!-- Bootstrap core CSS     -->
		    <link href="<?php echo base_url();?>public/css/bootstrap.min.css" rel="stylesheet" />

		    <!--  Material Dashboard CSS    -->
		    <link href="<?php echo base_url();?>public/css/material-dashboard.css" rel="stylesheet"/>
		    <link href="<?php echo base_url();?>public/css/material-dashboard.css" rel="stylesheet"/>
		    <!--  CSS for Demo Purpose, don't include it in your project     -->
		    <link href="<?php echo base_url();?>public/css/demo.css" rel="stylesheet" />
			
		    <!--     Fonts and icons     -->
		    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
		    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
		</head>
		<body>
			<div class="wrapper">
			    <div  class="sidebar" data-color="orange" data-image="<?php echo base_url();?>public/img/sidebar-1.jpg">
					<!--
				        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

				        Tip 2: you can also add an image using data-image tag
				    -->

					<div class="logo" style="background: #fff; height: 80px;" >
						<a href="#!" class="simple-text">
							<img style="margin-top: -80px;" src="<?= base_url() ?>public/img/logo2.png" alt="">
						</a>					
					</div>
			    	<div class="sidebar-wrapper" style="background: #9c0c0c;">
			            <ul class="nav">
			                <li>
			                    <a href="<?= base_url() ?>personas ">
			                        <i style="color: #fff" class="material-icons">store</i>
	                        <p style="color: #fff">Inicio</p>
	                    </a>
	                </li>
	                 <li>
	                     <li role="presentation" class="dropdown ">	             
	                    <a href="<?= base_url()?>personas/edit">	      
	                    	<i style="color: #fff" class="material-icons">person</i>
	                        <p style="color: #fff">Editar Perfil</p>
	                    </a>
	                </li>
	                 	<a  href="<?php echo base_url()?>addCategorias">	      
	                    	<i style="margin-left: 30px; color: #fff"  class="material-icons">close</i>
	                        <p style="color: #fff">Cerrar Sesion</p>
	                    </a>
	                
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-absolute" style="background: rgba(218, 86, 8, 0.52);">
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
							
							<li class="dropdown">

								<a style="color: #000" href="#pablo" class="dropdown-toggle" data-toggle="dropdown">Bienvenido <?php echo $this->session->userdata('Nombre') ?>
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
