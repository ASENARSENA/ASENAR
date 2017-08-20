<div class="container">
<br>
<br>
<br>
<br>
	<div class="panel panel-info col-lg-11">
			<div class="card-content table-responsive">
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
				<div class="content">
	            <div class="container-fluid">
	                <div  class="row">
	                    <div class="col-lg-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="green">
	                                <center><h2 class="title">Editar Producto</h2><center>
	                            </div>
	                            <div class="card-content">
			<p>
				<label for="nombre">Nombre:</label>
				<input type="text" name="nombre" value="<?= set_value_input($datos,'nombre',$datos->ProdNombre); ?>" class="form-control" autofocus="True" />
			</p>
			<p>
				<label for="imagen">Imagen:</label>
				<input type="file" name="imagen" value="" />
			</p>
			<p>
				<label for="categoria">Categoria:</label>
				<input type="text" name="categoria" value="<?= set_value_input(	
				$datos,'categoria',$datos->CatNombre); ?>" class="form-control"/>
			</p>
			<p>
				<label for="descripcion">Descripcion:</label>
				<input type="text" name="descripcion" value="<?= set_value_input($datos,'descripcion',$datos->ProdDescripcion); ?>" class="form-control" />
			</p>
			<hr />
			<input type="hidden" name="id" value="<?= $id?>"/>
			<button class="btn btn-danger" type="submit">Enviar</button>
		<?= form_close();?>
		</div>
	</div>
	</div>
</div>
