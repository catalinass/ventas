        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Cliente
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
                       <a href = "<?php echo base_url(); ?>Administrar/Cliente_Controller/agregar_cliente"class ="btn btn-primary"> 
                       <span class="fa fa-plus"></span>Agregar Cliente</a>

                       </div>
                    </div>
                    <hr>
                    <div class = "row">
                       <div class= "col-md-12">
                        
                       <table id ="tableclientes"class ="table table-bordered btn-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Identificacion</th>
                                    <th>Nombre</th>
                                    <th>Primer Apellido</th>
                                    <th>Segundo Apellido</th>
                                    <th>Tel</th>
                                    <th>Empresa</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                
                            </thead>
                                <tbody>
                                    <print>
                                  <?php if(!empty($clientes)):?>
                                    <?php foreach($clientes as $cliente):?>
                                 
                                     <td><?php echo $cliente->id_cliente;?></td>
                                     <td><?php echo $cliente->identificacion;?></td>
                                     <td><?php echo $cliente->nombre;?></td>
                                     <td><?php echo $cliente->primer_apellido;?></td>
                                     <td><?php echo $cliente->segundo_apellido;?></td>
                                     <td><?php echo $cliente->telefono;?></td>
                                     <td><?php echo $cliente->empresa;?></td>
                                     <?php 
                                         if($cliente->estado == 1){
                                             echo '<td bgcolor=#008f39 align="center"><font color="white">Activo</font></td';
                                         } else{
                                            echo '<td bgcolor=#CB324 align="center"><font color="white">Inactivo</font></td';
                                         }
                                     ?>
                                     <?php $datoscliente = $cliente->id_cliente."*".$cliente->identificacion."*".$cliente->nombre."*".$cliente->primer_apellido."*".$cliente->segundo_apellido."*".$cliente->telefono."*".$cliente->empresa."*".$cliente->estado; ?>
                                        </tr>
                                      <td>
                                        <div class= "btn-group">
                                        <button type="button" class="btn btn-info btn-ver-cliente" data-toggle ="modal" data-target="#modal-cliente"
                                        value="<?php echo $datoscliente; ?>"><span class = "fa fa-search"></span></button>
                                        <a href="<?php echo base_url();?>Administrar/Cliente_Controller/editar_cliente/<?php echo $cliente->id_cliente?>" 
                                        class="btn btn-warning"><span class= "fa fa-pencil"></span></a>
                                        <a href="<?php echo base_url();?>Administrar/Cliente_Controller/eliminar_cliente/<?php echo $cliente->id_cliente?>"  
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
        <div class="modal fade" id="modal-cliente">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <button type= "button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Informacion del cliente</h4>
        </div><!--final modal header-->
        <div class="modal-body">

        </div><!--Final Modal Body-->
        <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"> 
        Cerrar
         </button>
        </div><!-- Final Modal Dialog Footer-->
        </div><!-- Final Modal content-->
        </div><!-- Final Modal Dialog-->
        </div><!--Final modal Categoria>
