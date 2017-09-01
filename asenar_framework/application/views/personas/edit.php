<div class="container">
<br>
<br>
<br>
<br>
  <div class="panel panel-info col-lg-11">
      <div class="card-content table-responsive">
    <?= form_open(null,array("class"=>"form-horizontal","name"=>"form"));

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
	                   <div class="card-header" style="background: #dd2c00">
	                       <center><h2 class="title">Editar Pefil</h2></center>
	                   </div>
	             <div class="card-content">
					      <input style="width: 800px; margin: 0 auto" type="text" name="nombre" value="<?= set_value_input($datos,'nombre',$datos->PerNombres); ?>" class="form-control" autofocus="True" /> 
					      <br>
					      <input style="width: 800px; margin: 0 auto" type="text" name="apellido" value="<?= set_value_input($datos,'apellido',$datos->PerApellidos); ?>" class="form-control" autofocus="True" /> 
					      <br>
					      <input style="width: 800px; margin: 0 auto" type="text" name="idenficicacion" value="<?= set_value_input($datos,'idenficicacion',$datos->PerIdentificacion); ?>" class="form-control" autofocus="True" /> 
					      <br>
					      <input style="width: 800px; margin: 0 auto" type="text" name="correo" value="<?= set_value_input($datos,'correo',$datos->PerEmail); ?>" class="form-control" autofocus="True" /> 
					      <br>
						   	<hr />
						   	<!--<input type="hidden" name="id" value="<?= $id?>"/>-->
						    <center>  <button class="btn" style="background: #ff9800" type="submit">Enviar</button></center>
						    <?= form_close();?>
				    	</div>
  					</div>
  				</div>
  			</div>
  		</div>
