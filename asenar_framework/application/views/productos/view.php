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
	                            <div class="card-header" data-background-color="orange">
	                                <h4 class="title">Listado de Productos</h4>
	                                <p class="category">Desayuno</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-warning">
	                                        <th>Codigo</th>
	                                    	<th>Nombre</th>
	                                    	<th>Imagen</th>
	                                    	<th>Categoria</th>
	                                    	<th>Descripción</th>
	                                    	<th>Acciones</th>
	                                    </thead>
										<?php

										while ($producto=$resultado->fetch_object()) 
										{

										?>
										<tbody>
	                                        <tr>
	                                        	<td><?php echo $producto->IdProductos; ?></td>
	                                        	<td><?php echo $producto->ProdNombre; ?></td>
	                                        	<td ><img src="<?php echo base_url()?>./public/uploads/productos/<?php echo $producto->ProdImagen; ?>"></td>
	                                        	<td><?php echo $producto->CatNombre; ?></td>
	                                        	<td><?php echo $producto->ProdDescripcion; ?></td>
	                                        	<td><a href="frmActualizarProductos.php?idProducto=<?php echo $producto->IdProductos?>" class="btn btn-info btn-fab-mini"><i class="material-icons">edit</i></a><a href="EliminarProductos.php?idProducto=<?php echo $producto->IdProductos?>" class="btn btn-danger btn-fab-mini"><i class="material-icons">delete</i></a></td>
	                                        </tr>
	                                        	
	                                    </tbody>
	                                    <?php
											
										}

										?>
	                                </table>
	                                <p>

									<?php
									if ($_REQUEST['msg']==1){
									?>
									<div class="alert alert-dismissible alert-warning">
									  <button type="button" class="close" data-dismiss="alert">×</button>
									  <strong>Producto</strong> Agregado Correctamente
									 
									</div>
									<?php	
									}elseif ($_REQUEST['msg']==2){
										echo "Problemas al actualizar el Producto";	
									}elseif ($_REQUEST['msg']==3){
										echo "Se ha eliminado el Producto correctamente";
									}
									elseif ($_REQUEST['msg']==4){
										echo "Problemas al eliminar el Producto";
									}

									?>
	                            </div>
	                        </div>
						</div>
					</div>
				</div>
				<p><a href="frmAgregarProductos.php" class="btn btn-warning btn-fab"><i class="material-icons">add</i></a>  Agregar Productos</p> 
			</div>