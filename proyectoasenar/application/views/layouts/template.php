<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>hola</title>
	<link rel="stylesheet" href="<?= base_url();?>public/css/bootstrap.min.css">
</head>
<body>
<h1>titulo desde el template</h1>
<div id="manzana">
	<!-- PROPIEDAD DE LA LIBRERIA LAYOUT-->
	<?php echo $content_for_layout;?>
</div>
</body>
</html>