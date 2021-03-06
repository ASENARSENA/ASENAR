<!doctype html>
<html lang="en"> 
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>public/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>public/img/logo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<title>Restaurant</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	    <!-- Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons" >

	<!-- CSS Files -->
    <link href="<?php echo base_url() ?>public/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>public/css/material-kit.css" rel="stylesheet"/>
    <!--<link href="../<?php echo base_url() ?>public/css/materialize.min.css" rel="stylesheet"/>-->
    <link href="<?php echo base_url() ?>public/css/miestilo.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>public/css/demo.css">
   
</head>
<body class="landing-page" data-spy="scroll" data-target="#registrar">
    <nav class="navbar navbar-transparent navbar-absolute">
    	<div class="container">
        	<div class="navbar-header">	 
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Responsi</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="#">ASENAR</a>
        	</div>
        	<div class="collapse navbar-collapse" id="navigation-example">
                        <form class="navbar-form navbar-left">
                            <div class="form-primary">
                               <input type="text" class="form-control col-md-8" placeholder="Buscar">
                            </div>
                        </form>
        		<ul class="nav navbar-nav navbar-right">
    				<li>
    					<a href="#" target="_blank">
    						<i class="material-icons" >home</i>
    						Inicio
    					</a>
    				</li>		   
    				<li>
    					<a href="#registrar">
    						<i class="material-icons">border_color</i>Registrate
    					</a>
 					</li>
                    <li>
    					<a href="<?= base_url()?>acceso/login">
                            <i class="material-icons">person</i> Iniciar Sesion
    					</a>
    				</li>
 					<li>
						<a href="https://play.google.com/store?utm_source=latam_Med&utm_medium=hasem&utm_content=Jan2017&utm_campaign=Evergreen&pcampaignid=MKT-DR-latam-co-1002305-Med-hasem-ap-Evergreen-Jan2017-Text_Search_BKWS&gclid=CLi3ssPg3tICFQHRDQodMHUNfg&gclsrc=ds" target="_blank">	
							<i class="material-icons">unarchive</i> Descargas
						</a>
    				</li>
		            <li>
		                <a href="#" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-twitter"></i>
						</a>
		            </li>
		            <li>
		                <a href="#" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-facebook-square"></i>
						</a>
		            </li>
					<li>
		                <a href="#" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-instagram"></i>
						</a>
		            </li>
        		</ul>
        	</div>
    	</div>
    </nav>
     <div class="wrapper">
	        <div class="header header-filter" style="background-image: url('http://casamarianorestaurante.com/wp-content/uploads/2015/09/fondo-madera-casa-mariano.jpg');">
	            <div class="container">
	                <div class="row">
						<div class="col-md-6">
							<h1 class="title">Realiza tu pedido rapido y eficaz </h1>
		                    <h4>Descarga la App 1164021 y comienza a comer, ya disponible en la PlayStore</h4>
		                    <br/>
		                    <a href="#registrar" class="btn btn-danger btn-raised btn-lg">
								<i class=""></i> ¡¡¡Pide tu plato ya!!
							</a>
						</div>
	                </div>
	            </div>
	        </div>   
	    </div>
		<div class="main main-raised">
			<div class="container">
		    	<div class="section text-center section-landing">
	                <div class="row">
	                    <div class="col-md-12 ">
	                        <h2 class="title">Bienvenidos tu cafeteria CTPI.</h2>
	                        <h5 class="description">Bienvenidos tu cafeteria CTPI.</h5>
	                    </div>
	                </div>	
					<div class="features">
						<div class="row">
		                    <div class="col-md-4">
								<div class="info">
									<div class="icon icon-primary">
										<i class="material-icons">restaurant</i>
									</div>
									<h4 class="info-title">Rapidez</h4>
									<p>Rapidez</p>
								</div>
		                    </div> 	
		                    <div class="col-md-4">
								<div class="info">
									<div class="icon icon-success">
										<i class="material-icons">verified_user</i>
									</div>
									<h4 class="info-title">Excelencia</h4>
									<p>Excelencia</p>
								</div>
		                    </div>
		                    <div class="col-md-4">
								<div class="info">
									<div class="icon icon-danger">
										<i class="material-icons">phone_android</i>
									</div>
									<h4 class="info-title">Moderno</h4>
									<p>Moderno</p>
								</div>
		                    </div>
		                </div>
					</div>
	            </div>
	        	<div class="section text-center">
	                <h2 class="title">EQUIPO</h2>
					<div class="team">
						<div class="row">
			                <div class="col-md-4">
			                    <div class="team-player">
                                    <img src="<?php echo base_url() ?>public/img/juliana.jpg" alt="Thumbnail Image" class="img-raised img-circle">
			                        <h4 class="title">Juliana Gaviria<br />
										<small class="text-muted">Analisis y Desarrollo de Sistemas de Informacion</small>
									</h4>
			                        <p>Sena Regional Cauca</p>
									<a href="https://www.facebook.com/diego.vallejo.52" class="btn btn-simple btn-just-icon">
									<i class="fa fa-facebook-square"></i></a>
									<a href="https://www.youtube.com/channel/UCveaeHsx0zDtzAvtpIla43A?spfreload=10" class="btn btn-simple btn-just-icon">
									<i class="fa fa-youtube-play"></i></a>
									<a href="https://www.instagram.com/?hl=es" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-instagram"></i></a>
			                    </div>
			                </div>
			                <div class="col-md-4">
			                    <div class="team-player">
                                                <img src="<?php echo base_url() ?>public/img/dyego.jpg" alt="Thumbnail Image" class="img-raised img-circle">
			                        <h4 class="title">Dyego Vallejo<br />
										<small class="text-muted">Analisis y Desarrollo de Sistemas de Informacion</small>
									</h4>
			                        <p>Sena Regional Cauca</p>
									<a href="https://www.facebook.com/diego.vallejo.52" class="btn btn-simple btn-just-icon">
									<i class="fa fa-facebook-square"></i></a>
									<a href="https://www.youtube.com/channel/UCveaeHsx0zDtzAvtpIla43A?spfreload=10" class="btn btn-simple btn-just-icon">
									<i class="fa fa-youtube-play"></i></a>
									<a href="https://www.instagram.com/?hl=es" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-instagram"></i></a>
			                    </div>
			                </div>
			                <div class="col-md-4">
			                    <div class="team-player">
                                                <img src="<?php echo base_url() ?>public/img/brayan.jpg" alt="Thumbnail Image" class="img-raised img-circle">
			                        <h4 class="title">Brayan Tenorio<br />
										<small class="text-muted">Analisis y Desarrollo de Sistemas de Informacion</small>
									</h4>
			                        <p>Sena Regional Cauca</p>
									<a href="https://www.facebook.com/diego.vallejo.52" class="btn btn-simple btn-just-icon">
									<i class="fa fa-facebook-square"></i></a>
									<a href="https://www.youtube.com/channel/UCveaeHsx0zDtzAvtpIla43A?spfreload=10" class="btn btn-simple btn-just-icon">
									<i class="fa fa-youtube-play"></i></a>
									<a href="https://www.instagram.com/?hl=es" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-instagram"></i></a>
			                    </div>
			                </div>
						</div>
					</div>

	            </div>
	        	<div class="section landing-section">
	                <div class="row">
	                    <div class="col-md-8 col-md-offset-2">
	                        <h2 class="text-center title">Contactos</h2>
							<h4 class="text-center description">Escribe Mensaje </h4>
	                        <form class="contact-form">
	                            <div class="row">
	                                <div class="col-md-6">
										<div class="form-group has-error">
											<label class="control-label">Nombre</label>
											<input type="text" class="form-control" id=inputError>
										</div>
									</div>	
	                                <div class="col-md-6">
 										<div class="form-group has-error">
											<label class="control-label" for="inputError">Correo Electronico</label>
									  		<input type="correo" class="form-control" id="inputError">
										</div>
	                                </div>
								
	                            </div>

								<div class="form-group has-error">
									<label class="control-label" for="inputError">Mensajes</label>
									<input type="text" class="form-control" rows="4"></textarea>
								</div>
								
								</div>
								</div>
									
									</div>
		                            <div class="row">
		                                <div class="col-md-4 col-md-offset-4 text-center">
		                                    <button class="btn btn-danger btn-raised">
											Enviar Mensaje
											</button>
		                                </div>
		                            </div>
		                            <div class="btn-group" data-toggle="button">
	                            </div>
	                        </form>
	                    </div>
	                </div>

	            </div>
	        </div>
		</div>
			<footer class="footer">
				<div class="container-fluid">
					
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
					<p class="copyright pull-right">
						 <a href="#!">SENA</a>, Centro CTPI Popayan Cauca.
					</p>
						</ul>
							
				</div>
			</footer>
	   
	</div>
	<!--   JS    -->
	<script src="<?php echo base_url() ?>public/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>public/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>public/js/material.min.js"></script>
	<script src="<?php echo base_url() ?>public/js/nouislider.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>public/js/bootstrap-datepicker.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>public/js/material-kit.js" type="text/javascript"></script>
	<!--MATERIALIZE-->
	<script src="<?php echo base_url() ?>public/js/materialize.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>public/js/misestilos.js" type="text/javascript"></script>
</body>


</html>
