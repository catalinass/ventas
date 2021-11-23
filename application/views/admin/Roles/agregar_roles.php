<!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
             Roles
                <small>Agregar</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                    <hr>
                    <div class="row">
                        <div class = "col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                             <div class ="alert alert-danger alert-dismissible">
                                 <button type = "button" class = "close" data-dismiss="alert" aria-hidden= "true">
                                 &times;
                                 </button>
                                <p>
                                <i class ="icon fa fa-ban"></i>
                                <?php echo $this->session->flashdata("error"); ?> 
                                </p>
                             </div> <!-- /.Final de Alerta -->
                        <?php endif;?>

                        <form action= "<?php echo base_url(); ?>Administrar/Roles_Controller/registrar_roles" method = "post">
                           
                           <div class="form-group <?php echo !empty(form_error("nombreN"))? 'has-error':'';?>">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombreN" id="nombreI" value="<?php echo set_value("nombreN")?>">
                            <?php echo form_error("nombreN","<span class='help-block' >","</span>");?>
                           </div>

                           <div class="form-group <?php echo !empty(form_error("descripcionN"))? 'has-error': '';?>">
                            <label for="descripcion">Descripcion:</label>
                            <input type="text" class="form-control" name="descripcionN" id="descripcionI" value="<?php echo set_value("descripcionN")?>">
                            <?php echo form_error("descripcionN","<span class='help-block' >","</span>");?>
                           </div>


                           <div class="form_group">
                            <button type="submit" class ="btn btn-success btn-flat">Guardar</button>
                        
                           </div>

                        </form>
                        </div>
                    </div><!-- /.Final ROW -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->