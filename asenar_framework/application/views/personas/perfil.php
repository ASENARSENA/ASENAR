			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-8">
							<div class="card" style="width: 600px;">
	                            <div class="card-header" data-background-color="orange">
	                                <center><h2><?php echo $this->session->userdata('Nombre') ?></h2></center>
	                            </div>
	                  <div class="card-content table-responsive">
	                           <input DISABLED  style="font-size: 30px; margin: 0 auto; " type="text" name="nombre" value="<?= set_value_input($datos,'nombre',$datos->PerNombres); ?>" class="form-control" autofocus="True" /> 
					      <br>
					      <input DISABLED  style="font-size: 30px; margin: 0 auto; " type="text" name="apellido" value="<?= set_value_input($datos,'apellido',$datos->PerApellidos); ?>" class="form-control" autofocus="True" /> 
					      <br>
					      <input DISABLED  style="font-size: 30px; margin: 0 auto; " type="text" name="idenficicacion" value="<?= set_value_input($datos,'idenficicacion',$datos->PerIdentificacion); ?>" class="form-control" autofocus="True" /> 
					      <br>
					      <input DISABLED  style="font-size: 30px; margin: 0 auto; " type="text" name="correo" value="<?= set_value_input($datos,'correo',$datos->PerEmail); ?>" class="form-control" autofocus="True" /> 
					      <br>
	                            </div>
	                            <div class="row">
	                            	<div class="col-lg-offset-9">
	                            		<a href="<?php echo base_url()?>personas/edit/<?php echo $datos->idPersona?>" class="btn btn-danger">Editar
	                            	</a>
	                            	</div>
	                            </div>
	                        </div>
						</div>
						<div class="col-lg-4">
							<img class="img-circle" style="margin-left:-20%; margin-top: 10%;" src="<?php echo base_url()?>./public/uploads/productos/66c6b1e2fb91c23ae9675a076e1e833b.jpg">
						</div>
					</div>
				</div>
			</div>