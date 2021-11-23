 <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Producto
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
                        <form action= "<?php echo base_url(); ?>Administrar/Producto_controller/registrar_productos" method = "post">
                           
                           <div class="form-group <?php echo !empty(form_error("nombreN"))? 'has-error':'';?>">
                            
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombreN" id="nombreI" class ="form-control" value="<?php echo set_value("nombreN")?>">
                            <?php echo form_error("nombreN","<span class='help-block' >","</span>");?>

                           </div>

                           <div class="form-group<?php echo !empty(form_error("descripcionN"))? 'has-error': '';?>">
                            
                            <label for="descripcion">Descripcion:</label>
                            <input type="text" class="form-control" name="descripcionN" id="descripcionI" class ="form-control" value="<?php echo set_value("descripcionN")?>">
                            <?php echo form_error("descripcionN","<span class='help-block' >","</span>");?>
                           </div>

                          <div class="form-group<?php echo !empty(form_error("precioN"))? 'has-error': '';?>">
                          <label for="precio">Precio:</label>
                          <input type="number" class="form-control" name="precioN" id="precioI" class ="form-control" value="<?php echo set_value("precioN")?>">
                          <?php echo form_error("precioN","<span class='help-block' >","</span>");?>
                          </div>

                          <div class="form-group<?php echo !empty(form_error("stockN"))? 'has-error': '';?>">
                          <label for="stock">Stock:</label>
                          <input type="text" class="form-control" name="stockN" id="stockI" class ="form-control" value="<?php echo set_value("stockN")?>">
                          <?php echo form_error("stockN","<span class='help-block' >","</span>");?>
                          </div>
                          <div class="form-group <?php echo !empty(form_error("CategoriaN"))? 'has-error':''; ?>">
                            
                            <label for="categoria">Categoria:</label>
                            <select class="form-control" name="categoriaN" id="categoriaI">
                              <?php if(!empty($categorias)):?>
                              <?php foreach($categorias as $categoria): ?>
                              <option value= "<?php echo $categoria->id_categorias;?>"><?php echo $categoria->nombre; ?></option?>

                              <?php endforeach;?>
                              <?php endif;?>
                            </select>
                            <?php echo form_error("categoriaN","<span class='help-block' >","</span>"); ?>
                            
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