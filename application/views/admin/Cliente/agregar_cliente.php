         <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Cliente
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

                        <form action= "<?php echo base_url(); ?>Administrar/Cliente_Controller/registrar_cliente" method = "post">
                           
                           <div class="form-group <?php echo !empty(form_error("identificacionN"))? 'has-error':'';?>">
                            <label for="identificacion">Identificación:</label>
                            <input type="number" class="form-control" name="identificacionN" id="identificacionI" value="<?php echo set_value("identificacionN")?>">
                            <?php echo form_error("identificacionN","<span class='help-block' >","</span>");?>
                           </div>

                           <div class="form-group <?php echo !empty(form_error("nombreN"))? 'has-error':'';?>">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombreN" id="nombreI" value="<?php echo set_value("nombreN")?>">
                            <?php echo form_error("nombreN","<span class='help-block' >","</span>");?>
                           </div>

                           <div class="form-group <?php echo !empty(form_error("primerapellidoN"))? 'has-error':'';?>">
                            <label for="primer_apellido">Primer Apellido:</label>
                            <input type="text" class="form-control" name="primerapellidoN" id="primerapellidoI" value="<?php echo set_value("primerapellidoN")?>">
                            <?php echo form_error("primerapellidoN","<span class='help-block' >","</span>");?>
                           </div>

                           <div class="form-group <?php echo !empty(form_error("segundoapellidoN"))? 'has-error':'';?>">
                            <label for="segundo_apellido">Segundo Apellido:</label>
                            <input type="text" class="form-control" name="segundoapellidoN" id="segundoapellidoI" value="<?php echo set_value("segundoapellidoN")?>">
                            <?php echo form_error("segundoapellidoN","<span class='help-block' >","</span>");?>
                           </div>

                           <div class="form-group <?php echo !empty(form_error("telefonoN"))? 'has-error':'';?>">
                            <label for="telefono">Telefono:</label>
                            <input type="number" class="form-control" name="telefonoN" id="telefonoI" value="<?php echo set_value("telefonoN")?>">
                            <?php echo form_error("telefonoN","<span class='help-block' >","</span>");?>
                           </div>

                           <div class="form-group <?php echo !empty(form_error("empresaN"))? 'has-error': '';?>">
                            <label for="empresa">Empresa:</label>
                            <input type="text" class="form-control" name="empresaN" id="empresaI" value="<?php echo set_value("empresaN")?>">
                            <?php echo form_error("empresaN","<span class='help-block' >","</span>");?>
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