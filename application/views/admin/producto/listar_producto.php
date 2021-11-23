 <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Producto
                <small>Lista</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                    <div class = "row">
                       <div class = "col-md-12">
                       <a href = "<?php echo base_url();?>Administrar/Producto_controller/agregar_producto"class ="btn btn-primary"> 
                       <span class="fa fa-plus"></span>Agregar Producto </a>

                       </div>
                    </div>
                    <div class = "row">
                       <div class= "col-md-12">

                       <table id ="tablaproductos"class ="table table-bordered btn-hover">
                            <thead>
                                <tr>
                                    <th>Código Producto</th>
                                    <th>Categoría</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Existencias</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php if(!empty($productos)):?>
                                 <?php foreach($productos as $productos):?>
                                 <tr>
                                     <td><?php echo $productos ->id_productos;?></td>
                                     <td><?php echo $productos ->categoria;?></td>
                                     <td><?php echo $productos ->nombre;?></td>
                                     <td><?php echo $productos ->descripcion;?></td>
                                     <td><?php echo $productos ->stock;?></td>
                                     <?php 
                                         if($productos->estado == 1){
                                             echo '<td bgcolor=#008f39 align="center"><font color="white">Activo</font></td';
                                         } else{
                                            echo '<td bgcolor=#CB324 align="center"><font color="white">Inactivo</font></td';
                                         }
                                     ?>
                                     <?php $datosproductos = $productos->id_productos."*".$productos->categoria."*".$productos->nombre."*".$productos->descripcion."*".$productos->precio."*".$productos->stock."*".$productos->estado?>
                                    
                                     
                                      
                                    
                                     <td>
                                     <div class= "btn-group">
                                        <button type="button" class="btn btn-info btn-ver-producto" data-toggle ="modal" data-target="#modal-producto"
                                        value="<?php echo $datosproductos;?>"><span class = "fa fa-search"></span></button>
                                        <a href="<?php echo base_url();?>Administrar/Producto_controller/editar_producto/<?php echo $productos->id_productos?>" 
                                        class="btn btn-warning"><span class= "fa fa-pencil"></span></a>
                                        <a href="<?php echo base_url();?>Administrar/Producto_controller/eliminar_producto/<?php echo $productos->id_productos?>" 
                                        class="btn btn-danger"><span class= "fa fa-remove"></span></a>
                                      </div> 
                                    </td> 
                                 </tr>

                                 <?php endforeach;?>
                                 <?php endif;?>
                            </tbody>
                       </table>
                </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <div class="modal fade" id="modal-producto">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <button type= "button" class="close" data-dismiss= "modal"aria-label="close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion del producto</h4>
        </div><!--final modal header-->
        <div class="modal-body">
        </div><!--Final Modal Body-->
        <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"> Cerrar</button>
        </div><!-- Final Modal Dialog-->
        </div><!--Final modal Categoria>
