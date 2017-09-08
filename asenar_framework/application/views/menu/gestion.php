<br>
<br>
<br>
<br>
<form>
    <br><br>

    <!-- <div class="col-lg-5 col-md-5">
        <input type="date" name='fechaMenu' id='fechaMenu'>
    </div> -->

    <!-- Lista de Productos -->
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header" style=" background: rgb(240, 177, 96)">
                <center><h2 class="title">Listado de Productos</h2></center>
                <!-- <div class="col-lg-6 col-md-6"> -->
    <!-- </div> -->
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-content table-responsive">
                        <select style="width: 80%" class="form-control" name="opcJornada" id="opcJornada">
                            <option default value='0'>Selecione una jornada...</option>
                            <option value="DESAYUNO">Desayuno</option>
                            <option value="ALMUERZO">Almuerzo</option>
                            <option value="CENA">Cena</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">   
                <input style="margin-top: 45px;" type="date" name='fechaMenu' id='fechaMenu'>
                </div>
            </div>
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
                <input class="btn" style="background: rgb(156, 12, 12)" type="submit" id="crearMenuDia"; value="CREAR MENU DEL DIA">
            </div>
        </div>
    </div>
</form><br><br><br><br><br><br><br><br>