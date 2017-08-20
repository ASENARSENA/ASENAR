<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>hola</title>
	<link rel="stylesheet" href="<?= base_url();?>public/css/bootstrap.min.css">
	<!-- Material Design fonts -->
	  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

</head>
<body>
	<h1>titulo desde el layout del frontend</h1>
	<?= $content_for_layout;?>
	<br>
	<script src="<?= base_url();?>public/js/jquey.min.js"></script>
	<script src="<?= base_url();?>public/js/bootstrap.min.js"></script>
	<script src="<?= base_url();?>public/js/funciones.js"></script>
</body>
</html>