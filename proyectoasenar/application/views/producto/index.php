<div class="container"> 
<br>
<br>
<br>
	<div class="content">
    <?php
        if ($this->session->flashdata('mensaje')!='') {
            
            ?>
                <div class="alert alert-<?php echo $this->session->flashdata('css') ;?>">
                     <?= $this->session->flashdata('mensaje') ?>
                </div>
            <?php
        }
    ?>
     <div class="container-fluid ">
          <div  class="row">
              <div class="col-lg-11 col-md-12 col-sm-11 ">
                  <div class="card">
                     <div class="card-header" data-background-color="green">
                         <center><h2 class="title">Agregar Producto</h2></center>
                     </div>
        <div class="card-content">
         <table class="table table-bordered table-striped table-hover">
         	<thead>
         		<tr>
         		<th>ID</th>
         		<th>Nombre</th>
         		<th>Imagen</th>
         		<th>Categoria</th>
                <th>Descripcion</th>
         		<th>Acciones</th>
         		</tr>
         	</thead>
         	<tbody>
         	<?php foreach ($datos as $dato) {
         		?>
         		<tr>
         			<td><?php echo $dato->idProductos ?></td>
         			<td><?php echo $dato->ProdNombre ?></td>
         			<!--<td><?php #echo $dato->ProdImagen ?></td>-->
                    <td><?php echo base_url();?>public/fotos/productos<?php $dato->ProdImagen?> </td>
         			<td><?php echo $dato->CatNombre ?></td>                 
                    <td><?php echo $dato->ProdDescripcion ?></td>
                    <td><a href="<?php echo base_url()?>producto/editar/<?php echo $dato->idProductos?>"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a>
                    <a href="javascript:void(0);" onclick="eliminar('<?php echo base_url()?>producto/delete/<?php echo $dato->idProductos?>')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                    </td>
         		</tr>
            <?php
         	}
         	?>
         		
         	</tbody>
         </table>
         <br><br><br><br>
          <a style="margin-left:50px" value="Agegar_Producto" href="<?= base_url();?>Producto/add" class="btn btn-danger  btn-fab"><i class="material-icons">add</i></a> 
	</div>
</div>