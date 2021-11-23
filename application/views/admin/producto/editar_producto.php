 <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                Producto
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
                        <form action= "<?php echo base_url(); ?>Administrar/Producto_controller/actualizar_productos" method = "post">
                        
                        <input type= "hidden" name= "id_productos" value="<?php echo $productos->id_productos?>">
                        <input type= "hidden" name= "nombreAnterior" value="<?php echo $productos->nombre?>">
                           
                          <div class="form-group"<?php echo !empty(form_error("nombreN"))?'has-error':'';?>>
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombreN" id="nombreI"class ="form-control" value="<?php echo !empty(form_error("nombreN"))?
                            set_value("nombreN"):$productos->nombre?>">
                            <?php echo form_error("nombreN","<span class='help-block' >","</span>");?>

                           </div>

                           <div class="form-group <?php echo !empty(form_error("descripcionN"))? 'has-error': '';?>">
                            
                            <label for="descripcion">Descripcion:</label>
                            <input type="text" class="form-control" name="descripcionN" id="descripcionI" class ="form-control" value="<?php echo !empty(form_error("descripcionN"))?
                            set_value("descripcionN"):$productos->descripcion?>">
                            <?php echo form_error("descripcionN","<span class='help-block' >","</span>");?>
                           </div>

                          <div class="form-group"<?php echo !empty(form_error("precioN"))? 'has-error': '';?>>
                          <label for="Precio">Precio:</label>
                          <input type="number" class="form-control" name="precioN" id="precioI" class ="form-control"  value="<?php echo !empty(form_error("precioN"))?
                            set_value("precioN"):$productos->precio?>">
                          <?php echo form_error("precioN","<span class='help-block' >","</span>");?>
                          </div>

                          <div class="form-group <?php echo !empty(form_error("stockN"))? 'has-error': '';?>">
                          <label for="Stock">Stock:</label>
                          <input type="text" class="form-control" name="stockN" id="stockI" class ="form-control"  value="<?php echo !empty(form_error("stockN"))?
                            set_value("stockN"):$productos->stock?>">
                          <?php echo form_error("stockN","<span class='help-block' >","</span>");?>
                          </div>
                          <div class="form-group <?php echo !empty(form_error("categoriaN"))? 'has-error':''; ?>">
                            
                            <label for="categoria">Categoria:</label>
                            <select class="form-control" name="categoriaN" id="categoriaI">
                              <?php
                                if(!empty($categorias)){
                                    foreach($categorias as $categoria){
                                        if($categoria->id_categorias==$productos->id_categoria){
                                            echo'<option selected="selected" value="'.$categoria->id_categoria.'">'.$categoria->nombre>'</option>';
                                        }else{
                                            echo '<option value="'.$categoria->id_categoria.'">'.$categoria->nombre>'</option>';
                                        }

                                    }//final foreach

                                }//final empty

                              ?>
                            </select>
                            <?php echo form_error("categoriaN","<span class='help-block' >","</span>"); ?>
                            
                        </div>

                           <div class="form-group <?php echo !empty(form_error("estadoN"))? 'has-error':''; ?>">
                            
                            <label for="estado">Estado:</label>
                            <select class="form-control" name="estadoN" id="estadoI">
                              <option value="">Seleccione</option>
                                <?php 
                                  if($producto->estado==1){
                                    echo '
                                    <option value="0">Inactivo</option>
                                    <option selected= "selected" value="1">Activo...</option>';

                                  }else{
                                    echo '
                                    <option selected= "selected" value="0">Inactivo</option>
                                    <option value="1">Activo...</option>';

                                  }
                                  ?>
                          
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