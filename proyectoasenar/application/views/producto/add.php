<div class="container">
<br>
<br>
<br>
<br> 
	<div class="panel panel-info col-lg-11">
			<div class="card-content table-responsive">
		<?= form_open_multipart(null,array("class"=>"form-horizontal","name"=>"form"));?>
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
	                                <center><h2 class="title">Agregar Producto</h2><center>
	                            </div>
	                            <div class="card-content">
			<p>
				<label for="nombre">Nombre:</label>
				<input type="text" name="nombre" value="<?php set_value_input(array(),'nombre','nombre'); ?>" class="form-control" autofocus="True" />
			</p>
			<p>
				<label for="imagen">Imagen:</label>
				<input type="file" name="imagen" value="" />
				<?php #echo form_dropdown('categoria',$dato) ?>
			</p>
			<p>
				<select name="categoria" class="form-control" id="Categorias">
					<option value="0" selected>Seleccione una Categoria
						<?php 
							foreach ($categorias as $cate) {
								?>
								<option value="<?php echo $cate->idCategoria;?>">
									<?php echo $cate->CatNombre; ?>
								</option>
								<?php 
							}
						 ?>
					</option>
				</select>
			</p>	
			<p>
				<label for="descripcion">Descripcion:</label>
				<textarea class="form-control" rows="1" id="descripcion" name="descripcion" value="<?php set_value_input(array(),'descripcion','descripcion'); ?>" class="form-control"></textarea>
			</p>
			<hr />
			<input type="hidden" name="id" value="<?= $id ?>">
			<center><button class="btn btn-danger" type="submit">Guardar</button></center>
		<?= form_close();?>
		</div>
	</div></div></div></div></div></div></div>
