			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-8">
							<div class="card" style="width: 600px;">
	                            <div class="card-header" data-background-color="orange">
	                                <center><h2><?php echo $this->session->userdata('Nombre') ?></h2></center>
	                            </div>
	                  <div class="card-content table-responsive">
	                            <?php 
	                            	foreach ($datos as $dato) 
                                    {
                                ?>
	                            <div>
					                <label style=" margin-left:80px;" for="nombre">Nombre:</label>
					                <center><h3><?= $dato->PerNombres ?></h3></center>
					            </div>
					            <div>
					                <label style=" margin-left:80px;" for="nombre">Nombre:</label>
					                <center><h3><?= $dato->PerApellidos ?></h3></center>
					            </div>
					            <div>
					                <label style=" margin-left:80px;" for="nombre">Nombre:</label>
					                <center><h3><?= $dato->PerIdentificacion ?></h3></center>
					            </div>
					            <div>
					                <label style=" margin-left:80px;" for="nombre">Nombre:</label>
					                <center><h3><?= $dato->PerEmail ?></h3></center>
					            </div>
					            <?php 
					            } ?>
	                            </div>
	                            <div class="row">
	                            	<div class="col-lg-offset-9">
	                            		<a href="<?php echo base_url();?>usuarios/edit" class="btn btn-danger">Editar
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