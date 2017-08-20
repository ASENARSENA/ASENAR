<div class="container">
	<div class="panel-primary">
		<div class="panel-heading">Formulario</div>
			<div class="panel-body">
				<?= form_open(null,array("class"=>"form-horizontal","name"=>"form"));?>

				<!-- ALERTA DE ERRORES-->
				<?php
					$errors=validation_errors('<li>','</li>');
					if($errors!=""){
				?>
					<div class="alert alert-danger">
						<ul>
							<?= $errors; ?>
						</ul>
					</div>
				<?php
					}
				?>
				<h1>Ingresar datos</h1>
				<p>
					<label for="nombre">Nombre:</label>
					<input type="text" name="nombre" class="form-control" value="<?php set_value_input(array(),'nombre','nombre')?>" />
				</p>
				<p>
					<label for="correo">Correo:</label>
					<input type="email" name="correo" class="form-control" value="<?php set_value_input(array(),'correo','correo')?>"/>
				</p>
				<p>
					<label for="telefono">Telefono:</label>
					<input type="text" name="telefono" class="form-control" value="<?php set_value_input(array(),'telefono','telefono')?>" />
				</p>
				<p>
					<label for="imagen">Imagen:</label>
					<input type="file" name="imagen" class="form-control" value="<?php set_value_input(array(),'imagen','imagen')?>" />
				</p>
				<hr/>
				<button type="sumbit" name="Enviar" class="btn btn-info">Enviar</button>
				<?= form_close();?>
			</div>
		</div>
	</div>
</div>
	
</body>
</html>