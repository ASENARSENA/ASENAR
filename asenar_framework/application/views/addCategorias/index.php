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
                                    <center><h2 class="title">Agregar Categoria</h2><center>
                                </div>
                                <div class="card-content">
                            <div>
                        </div>        
                <label  style=" margin-left:80px;" for="categoria">Categoria:</label>
                <input style="width: 80%; margin: 0 auto;" type="text" name="categorias" value="<?php set_value_input(array(),'categorias','categorias'); ?>" class="form-control" autofocus="True" />
            </div>
            <!--<input type="hidden" name="id" value="<?= $id ?>">
-->            <center><button class="btn btn" style="background: #ff9800" type="submit">Guardar</button></center>
        <?= form_close();?>
        </div>
    </div></div></div></div></div></div></div>
