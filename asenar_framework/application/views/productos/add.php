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
            <div>
                <label style=" margin-left:80px;" for="nombre">Nombre:</label>
                <input style="width: 80%; margin: 0 auto;" type="text" name="nombre" value="<?php set_value_input(array(),'nombre','nombre'); ?>" class="form-control" autofocus="True" />
            </div>
            <br>
            <div>
                <label style=" margin-left:80px;" for="imagen">Imagen:</label>
                <input style="width: 80%; margin: 0 auto;" type="file" name="imagen" value="" />
            </div>
            <br>
            <div>
                <select  style="width: 80%; margin: 0 auto;" name="categoria" class="form-control" id="Categorias">
                    <option value="" selected>Seleccione una Categoria
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
            <br>   
            <div>
                <label style=" margin-left:80px;" for="descripcion">Descripcion:</label>
                <textarea style="width: 80%; margin: 0 auto;" class="form-control" rows="1" id="descripcion" name="descripcion" value="<?php set_value_input(array(),'descripcion','descripcion'); ?>" class="form-control"></textarea>
            </div>
            <hr />
            <!--<input type="hidden" name="id" value="<?= $id ?>">-->
            <center><button class="btn btn-success" type="submit">Guardar</button></center>
        <?= form_close();?>
        </div>
    </div></div></div></div></div></div></div>
