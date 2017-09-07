    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('http://casamarianorestaurante.com/wp-content/uploads/2015/09/fondo-madera-casa-mariano.jpg');">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">
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
								<div class="header text-center" style="background: #e78200;">
									<h4 >Ingresar</h4>
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
								<p class="text-divider">Bienvenido</p>
								<div class="content">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
										<div class="form-group has-error">
											<input type="text" name="correo" class="form-control" placeholder="Usuario" required>
										</div>	
									</div>
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<div class="form-group has-error">
											<input type="password" name="pass" placeholder="Contraseña" class="form-control" required />
										</div>	
									</div>

									<!-- If you want to add a checkbox to this form, uncomment this code
-->
									<div class="checkbox">
										<label>
											<input type="checkbox" name="optionsCheckboxes" >
										</label>
											olvide mi Contraseña
									</div> 
								</div>
								<div class="footer text-center">
								<button style="background: #870000;" class="btn " type="submit">Ingresar
								    <i class="material-icons right">send</i>
								</button>
								 <!-- <input type="hidden" value="<?= $rol ?>"> -->
								</div>
							<?php echo form_close();?>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
