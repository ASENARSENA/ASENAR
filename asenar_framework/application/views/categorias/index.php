<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" style="background: #c17900">
                                    <i class="material-icons">content_copy</i>
                                </div>
                                <div class="card-content" >
                                    <p class="category">Productos</p>
                                    <h3 class="title">4<small>Cantidad</small></h3>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" style="background:      rgb(240, 177, 96)" >
                                    <h4 class="title" >CATEGORIAS</h4>
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
                                <div class="ripple-container"></div>
                                </button>
                                        <tr>
                                    <thead style="color: #000; background: #ff844c" class="text-justify   text-warning">
                                        <tr>
                                            
                                            <th>Nombre</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 

                                    foreach ($datos as $dato) 
                                    {
                                       ?>
                                       <tr>
                                            
                                            <td><?php echo $dato->CatNombre ?></td>
                                            <td style="width: 20px;">            
                                            <a href="<?php echo base_url()?>categorias/edit/<?php echo $dato->idCategoria?>"> <i style="color: #c17900" class="material-icons">edit</i></a>
                                            <a href="<?php echo base_url()?>categorias/delete/<?php echo $dato->idCategoria?>"> <i class="material-icons" style="color: #9c0c0c">delete</i></a>
                                            </td>
                                       </tr>
                                    <?php   
                                    }
                                    ?>
                                        
                                    </tbody>
                                    
                                </table>
                                <p>
                                    <a href="<?php echo base_url();?>categorias/add" class="btn btn-warning btn-fab"><i class="material-icons">add</i></a>Agregar Categoria 
                                </p>
                            
                                </div>
                            </div>
                        </div>
                        </div>

</div>                        </div>