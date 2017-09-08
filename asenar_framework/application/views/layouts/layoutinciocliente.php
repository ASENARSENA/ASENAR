<!doctype html>
<html lang="en"> 
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>public/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>public/img/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>ASENAR</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <!-- Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons" >

    <!-- CSS Files -->

    <link href="<?php echo base_url() ?>public/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>public/css/material.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>public/css/material-kit.css" rel="stylesheet"/>
    <!--<link href="../<?php echo base_url() ?>public/css/materialize.min.css" rel="stylesheet"/>-->
    <link href="<?php echo base_url() ?>public/css/miestilo.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>public/css/colores.css" rel="stylesheet" />
   
</head>
<body class="landing-page" data-spy="scroll" data-target="#registrar">
    <nav class="navbar  navbar-fixed-top" role="navigation" style="background: #ae3a3a"">
        <div class="container">
            <div class="navbar-header">  
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                    <span class="sr-only">Responsi</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="margin-top: -80px;" class="navbar-brand" href="#"><img  src="<?= base_url() ?>public/img/logo2.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="navigation-example">
                        
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#" target="_blank">
                            <i class="material-icons">home</i>
                            Inicio
                        </a>
                    </li> 
                    <li>
                     
                    <a href="<?= base_url()?>personas/perfil/<?php echo $this->session->userdata('id')?>">
                            <i class="material-icons">person</i>Perfil
                     </a>
                    </li>
                    <li>
                        <a href="<?= base_url()?>usuarios/perfil">
                            <i class="material-icons">cancel</i> cerrar sesion
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
     <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel" style="-webkit-box-shadow: 0px 13px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 13px 5px 0px rgba(0,0,0,0.75);
box-shadow: 0px 13px 5px 0px rgba(0,0,0,0.75);">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <img src="<?php echo base_url() ?>public/img/foto6.jpg" style="height: 600px; width: 100%" alt="">
        </hgroup>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
            <img src="<?php echo base_url() ?>public/img/foto2.jpg" style="height: 600px; width: 100%" alt="">
        </hgroup>       
         </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
            <img src="<?php echo base_url() ?>public/img/foto3.jpg" style="height: 600px; width: 100%" alt="">
        </hgroup>
      </div>
    </div>
  </div> 
</div><br><br><br><br><br>
        <div class="main main-raised">
            <div class="container">
                <div class="section text-center section-landing">
                    <div class="row">
                        <div class="col-md-12 ">
                            <h2 class="title">Bienvenidos tu cafeteria CTPI.</h2>
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
                <center><h2>MENU</h2></center>
                <ul class="breadcrumb" style="margin-bottom: 5px;">
                  <li><a href="javascript:void(0)">DESAYUNO</a></li>
                  <li><a href="javascript:void(0)">ALUMUERZO</a></li>
                  <li><a href="javascript:void(0)">CENA</a></li>
                </ul><br> <br><br>
                <div class="container">
                    <?php 
                       foreach ($datos as $dato){
                     ?>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="card">
                                <!--Card image-->
                                <img style="width: 100%;" class="img-fluid" src="<?php echo base_url()?>public/uploads/productos/<?php echo $dato->ProdImagen;?>">
                                <!--Card content-->
                                <div class="card-body">
                                    <!--Title-->
                                    <h4 class="card-title"><?php echo $dato->ProdNombre ?></h4>
                                    <!--Text-->
                                    <p class="card-text"><?php echo $dato->ProdDescripcion ?></p>
                                    <a href="#" class="btn" >agregar</a>
                                </div>
                            </div>
                        </div>
                <?php 
                } ?>
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
                                            <button class="btn btn btn-raised" >
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
    <script src="<?php echo base_url() ?>public/js/material.js" type="text/javascript"></script>
</body>


</html>
inicio.php