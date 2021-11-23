<!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
               Usuario
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

                        <form action= "<?php echo base_url(); ?>Administrar/Usuario_Controller/registrar_usuario" method = "post">

                           <div class="form-group <?php echo !empty(form_error("nombreN"))? 'has-error':'';?>">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombreN" id="nombreI" value="<?php echo set_value("nombreN")?>">
                            <?php echo form_error("nombreN","<span class='help-block' >","</span>");?>
                           </div>

                           <div class="form-group <?php echo !empty(form_error("apellidosN"))? 'has-error':'';?>">
                            <label for="apellidos">Apellidos:</label>
                            <input type="text" class="form-control" name="apellidosN" id="apellidosI" value="<?php echo set_value("apellidosN")?>">
                            <?php echo form_error("apellidosN","<span class='help-block' >","</span>");?>
                           </div>

                    
                           <div class="form-group <?php echo !empty(form_error("telefonoN"))? 'has-error':'';?>">
                            <label for="telefono">Telefono:</label>
                            <input type="number" class="form-control" name="telefonoN" id="telefonoI" value="<?php echo set_value("telefonoN")?>">
                            <?php echo form_error("telefonoN","<span class='help-block' >","</span>");?>
                           </div>

                           <div class="form-group <?php echo !empty(form_error("emailN"))? 'has-error': '';?>">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="emailN" id="emailI" value="<?php echo set_value("emailN")?>">
                            <?php echo form_error("emailN","<span class='help-block' >","</span>");?>
                           </div>

                           <div class="form-group <?php echo !empty(form_error("usuarioN"))? 'has-error': '';?>">
                            <label for="usuario">Usuario:</label>
                            <input type="text" class="form-control" name="usuarioN" id="usuarioI" value="<?php echo set_value("usuarioN")?>">
                            <?php echo form_error("usuarioN","<span class='help-block' >","</span>");?>
                           </div>

                           <div class="form-group <?php echo !empty(form_error("passwordN"))? 'has-error': '';?>">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" name="passwordN" id="passwordI" value="<?php echo set_value("passwordN")?>">
                            <?php echo form_error("passwordN","<span class='help-block' >","</span>");?>
                           </div>

                           <div class="form-group <?php echo !empty(form_error("estadoN"))? 'has-error':''; ?>">
                            <label for="estado">Estado:</label>
                            <select class="form-control" name="estadoN" id="estadoI">
                              <option value="">Seleccione...</option>
                              <option value="0">Inactivo</option>
                              <option value="1">Activo...</option>
                            </select>
                            <?php echo form_error("estadoN","<span class='help-block' >","</span>"); ?>
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