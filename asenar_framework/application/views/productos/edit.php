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
                        <div class="card-header" style="background: #dd2c00">
                            <center><h2 class="title">Editar Producto</h2><center>
                        </div>
                        <div class="card-content">
    <p>
      <!-- <label for="nombre">Nombre:</label> -->
      <input style="width: 800px; margin: 0 auto" type="text" name="nombre" value="<?= set_value_input($datos,'nombre',$datos->ProdNombre); ?>" class="form-control" autofocus="True" />
    </p>
    <p>
      <!-- <label for="imagen">Imagen:</label> -->
      <input style="width: 800px; margin: 0 auto" type="file" name="imagen" value="" />
    </p>
    <p>
    <div>
      <select  style="width: 80%; margin: 0 auto;" name="categoria" class="form-control" id="Categorias">
          <option value="<?php echo 'CatNombre'; ?>" selected>
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
    </div>  
    </p>
    <p>
      <input style="width: 800px; margin: 0 auto" type="text" name="descripcion" value="<?= set_value_input($datos,'descripcion',$datos->ProdDescripcion); ?>" class="form-control" />
    </p>
    <hr />
    <input type="hidden" name="id" value="<?= $id?>"/>
    <center>  <button class="btn" style="background: #ff9800" type="submit">Enviar</button></center>
  <?= form_close();?>
  </div>
</div>
</div>
</div>
