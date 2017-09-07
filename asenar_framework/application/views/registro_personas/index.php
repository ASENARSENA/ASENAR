<div class="wrapper">
<div class="header header-filter" style="background-image: url('http://casamarianorestaurante.com/wp-content/uploads/2015/09/fondo-madera-casa-mariano.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-3 col-sm-6 col-sm-offset-3">
			<div class="card card-signup" style="width: 600px; margin-right: 400PX">
				<?php echo form_open(null,array('name'=>'form'));?>
				<?php
		            if($this->session->flashdata('mensaje')!='')
		            {
		               ?>
		               <div class="alert alert-<?php echo $this->session->flashdata('css')?>"><?php echo $this->session->flashdata('mensaje')?></div>
		               <?php 
		            }
		            ?>
				<?php
	                //acá visualizamos los mensajes de error
	                $errors=validation_errors('<li>','</li>');
	                if($errors!="")
	                {
	                    ?>
	                    <div class="alert alert-danger">
	                        <ul>
	                            <?php echo $errors;?>
	                        </ul>
	                    </div>
	                    <?php
	                }
	            ?>
				<div class="header text-center" style="background: #e78200">
					<strong><h4>Ingresar</h4></strong>
					<div class="social-line">
						<a href="<?php echo base_url();?>" class="btn btn-simple btn-just-icon">
							<i class="fa fa-facebook-square"></i>
						</a>
						<a href="<?php echo base_url();?>" class="btn btn-simple btn-just-icon">
							<i class="fa fa-twitter"></i>
						</a>
						<a href="<?php echo base_url();?>" class="btn btn-simple btn-just-icon">
							<i class="fa fa-google-plus"></i>
						</a>
					</div>
				</div>
				<p class="text-divider">Registrate</p>
				<div class="content">
					<div class="input-group">

						<div class="row">
							<div class="col-md-6">
									<div class="form-group has-error">
									<label for="nombre">Nombre:</label>
									<input type="text" name="nombre" class="form-control" value="<?php echo set_value_input(array(),'nombre','nombre')?>">
									</div>	
							</div>
							<div class="col-md-6">
								<div class="form-group has-error">
									<label for="apellido">Apellido:</label>
									<input type="text" name="apellido" class="form-control" value="<?php echo set_value_input(array(),'apellido','apellido')?>">
								</div>
							</div>
						</div>	
						<div class="row">
						<div class="col-md-6">
								<div class="form-group has-error">
								<label for="identificacion">Identificacion:</label>
								<input type="text" name="identificacion" class="form-control" value="<?php echo set_value_input(array(),'identificacion','identificacion')?>">
						</div>		
								</div>
						<div class="col-md-6">		
                                <div class="form-group has-error">
                                <label for="telefono">Telefono:</label>
                                <input type="text" name="telefono" class="form-control" value="<?php echo set_value_input(array(),'telefono','telefono')?>">
                                </div>
                        </div>        
                        </div>
                        <div class="row">
                        <div class="col-md-6">        
                        <div class="form-group has-error">
                        <label for="correo">E-mail</label>
                        <input type="E-mail" name="correo" class="form-control" value="<?php echo set_value_input(array(),'correo','correo')?>">	
                        </div>
                        </div>
                        <div class="col-md-6">
						<div class="form-group has-error">
                        <label for="pass">Contraseña:</label>
                        <input type="password" name="pass" class="form-control" value="<?php echo set_value_input(array(),'pass','pass')?>">
                        </div>
                        </div>
                        </div>
                        <input name="roll" type="hidden" value="2"> 
				<div class="footer text-center">
				<button class="btn " style="background: #870000" type="submit">Registrarse
				    
				</button>
					
				</div>
			<?php echo form_close();?>
		</div>
				</div>
			</div>
		</div>
	</div>
</div>
