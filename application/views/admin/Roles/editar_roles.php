<!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
            Roles
                <small>Editar</small>
                </h1>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box box-solid">
                    <div class="box-body">
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                             <div class ="alert alert-danger alert/dismissible">
                                 <button type = "button" class = "close" data-dismiss="alert" aria-hidden= "true">
                                 &times;
                                 </button>
                                <p>
                                <i class ="icon fa fa-ban"></i>
                                <?php echo $this->session->flashdata("error"); ?> 
                                </p>
                             </div> <!-- /.Final de Alerta -->
                        <?php endif;?>
                        <form action= "<?php echo base_url(); ?>Administrar/Roles_Controller/actualizar_roles" method = "POST">
                        <input type ="hidden" name="idN" value="<?php echo $roles->id_rol;?>" >
                        <input type ="hidden" name="nombreAnt" value="<?php echo $roles->nombre;?>" >
                        
                           
                           <div class="form-group<?php echo !empty(form_error("nombreN"))? 'has-error':'';?>">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombreN" id="nombreI"  class="form-control" 
                            value="<?php echo !empty(form_error("nombreN"))? set_value("nombreN"):$roles->nombre;?>">
                            <?php echo form_error("nombreN","<span class='help-block' >","</span>");?>
                           </div>

                           <div class="form-group"<?php echo !empty(form_error("descripcionN"))? 'has-error': '';?>>
                            
                            <label for="Descripcion">Descripcion:</label>
                            <input type="text" name="descripcionN" descripcion Id="" class="form-control" 
                            value="<?php echo !empty(form_error("descripcionN"))? set_value("descripcionN"):$roles->descripcion;?>">
                            <?php echo form_error("descripcionN","<span class='help-block' >","</span>");?>

                           </div>
                            
                        </div>

                           <div class="form_gruop">
                            <button type="submit" class ="btn btn-primary btn-flat">Actualizar</button>
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