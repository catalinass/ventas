
        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Categoria
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
                       <a href = "<?php echo base_url(); ?>Administrar/Categoria_Controller/agregar_categoria"class ="btn btn-primary"> 
                       <span class="fa fa-plus"></span>Agregar Categoria</a>

                       </div>
                    </div>
                    <hr>
                    <div class = "row">
                       <div class= "col-md-12">

                       <table id ="tablecategorias"class ="table table-bordered btn-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                
                            </thead>
                            <tbody>
                                 <?php if(!empty($categorias)):?>
                                 <?php foreach($categorias as $categoria):?>
                                 
                                     <td><?php echo $categoria ->id_categorias;?></td>
                                     <td><?php echo $categoria ->nombre;?></td>
                                     <td><?php echo $categoria ->descripcion;?></td>
                                     <?php 
                                         if($categoria->estado == 1){
                                             echo '<td bgcolor=#008f39 align="center"><font color="white">Activo</font></td';
                                         } else{
                                            echo '<td bgcolor=#CB324 align="center"><font color="white">Inactivo</font></td';
                                         }
                                     ?>
                                     <?php $datoscategoria = $categoria->id_categorias."*".$categoria->nombre."*".$categoria->descripcion."*".$categoria->estado; ?>
                                    </tr>
                                    <td>
                                        <div class= "btn-group">
                                        <button type="button" class="btn btn-info btn-ver-categoria" data-toggle ="modal" data-target="#modal-categoria"
                                        value="<?php echo $datoscategoria; ?>"><span class = "fa fa-search"></span></button>

                                        <a href="<?php echo base_url();?>Administrar/Categoria_Controller/editar_categoria/<?php echo $categoria->id_categorias?>" 
                                        class="btn btn-warning"><span class= "fa fa-pencil"></span></a>

                                        <a href="<?php echo base_url();?>Administrar/Categoria_Controller/eliminar_categoria/<?php echo $categoria ->id_categorias?>"  
                                        class="btn btn-danger"><span class= "fa fa-remove"></span></a>
                                      </div>
                                    </td> 
                                 </tr>
                                 <?php endforeach;?>
                                 <?php endif;?>
                            </tbody>
                       </table>
                    </div>
                </div>
                </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <div class="modal fade" id="modal-categoria">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <button type= "button" class="close" data-dismiss= "modal"aria-label="close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion de la categoria</h4>
        </div><!--final modal header-->
        <div class="modal-body">
        </div><!--Final Modal Body-->
        <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"> Cerrar</button>
        </div><!-- Final Modal Dialog-->
        </div><!--Final modal Categoria>
