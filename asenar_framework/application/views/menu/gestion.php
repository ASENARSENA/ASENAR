<br>
<br>
<br>
<br>
<br>
<br>
<form>
    <div class="col-lg-6 col-md-6">
        <select class="form-control" name="opcJornada" id="opcJornada">
            <option default value='0'>Selecione una jornada...</option>
            <option value="DESAYUNO">Desayuno</option>
            <option value="ALMUERZO">Almuerzo</option>
            <option value="CENA">Cena</option>
        </select>
    </div><br><br>

    <div class="col-lg-5 col-md-5">
        <input type="date" name='fechaMenu' id='fechaMenu'>
    </div>

    <!-- Lista de Productos -->
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="green">
                <h4 class="title">Listado de Productos</h4>
                <p class="category">Desayuno</p>
            </div>
            <div class="card-content table-responsive">
            <?php
                if($this->session->flashdata('mensaje')!='')
                {
                   ?>
                   <div class="alert alert-<?php echo $this->session->flashdata('css')?>"><?php echo $this->session->flashdata('mensaje')?></div>
                   <?php 
                }
            ?>

            <table class="table table-bordered table-striped table-hover">
                <thead class="text-justify text-warning">
                    <tr>
                        <th>Seleccionar</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Categoria</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($datos as $dato) 
                    {
                       ?>
                       <tr>
                            <td><center>
                                <div class="form-group">
                                    <div >
                                        <label>
                                            <input type="checkbox" class="checkbox opcMenu" value="<?= $dato->idProductos; ?>">
                                        </label>
                                  </div>
                                </div></center>
                            </td>
                            <td><?php echo $dato->ProdNombre ?></td>
                            <td><img class="circle" src="<?php echo base_url()?>public/uploads/productos/<?php echo $dato->ProdImagen; ?>"></td>
                            <td><?php echo $dato->CatNombre ?></td>
                            <td><?php echo $dato->ProdDescripcion ?></td>
                            <td><input type="number" name="Cantidad" id="cantOpc<?= $dato->idProductos; ?>"/></p></td>
                        </tr>
                    <?php   
                    }
                    ?>
                </tbody>
            </table>
            <div align="right">
                <!-- <a href="almuerzo" class="btn btn-info" id="crearMenuDia">CREAR MENU DEL DIA</a> -->
                <input class="btn btn-info" type="submit" id="crearMenuDia"; value="CREAR MENU DEL DIA">
            </div>
        </div>
    </div>
</form><br><br><br><br><br><br><br><br>