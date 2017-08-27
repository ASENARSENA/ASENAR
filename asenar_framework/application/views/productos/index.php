<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Productos</p>
                                    <h3 class="title">4<small>Cantidad</small></h3>
                                </div>
                                
                            </div>
                        </div>
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
                                <input type="text" class="form-control" style="width: 20%; margin-left: 70%;" id="inputEmail" placeholder="Buscar"><button style="margin-top: -80px; margin-left: 90%;" type="submit" class="btn btn-info btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
								</button>
                                    <thead class="text-justify   text-warning">
                                        <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                        <th>Categoria</th>
                                        <th>Descripción</th>
                                        <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 

                                    foreach ($datos as $dato) 
                                    {
                                       ?>
                                       <tr>
                                            <td><?php echo $dato->idProductos ?></td>
                                            <td><?php echo $dato->ProdNombre ?></td>
                                            
                                            <td style="width: 20%;"><img src="<?php echo base_url()?>public/uploads/productos/<?php echo $dato->ProdImagen;?>"></td>
                                            <td><?php echo $dato->CatNombre ?></td>
                                            <td><?php echo $dato->ProdDescripcion ?></td>
                                            <td>
                                            <a href="<?php echo base_url()?>productos/edit/<?php echo $dato->idProductos?>"> <i style="color: #000" class="material-icons">edit</i></a>
                                            <a href="javascript:void(0);" onclick="eliminar('<?php echo base_url()?>Productos/delete/<?php echo $dato->idProductos?>')"> <i class="material-icons" style="color: #000">delete</i></a>
                                            </td>
                                       </tr>
                                    <?php   
                                    }
                                    ?>
                                        
                                    </tbody>
                                	
                                </table>
                                <p>
                                    <a href="<?php echo base_url();?>Productos/add" class="btn btn-warning btn-fab"><i class="material-icons">add</i></a>  Agregar Productos 
                                </p>
                        	
                                </div>
                            </div>
                        </div>