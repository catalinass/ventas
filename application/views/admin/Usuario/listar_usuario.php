<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Usuario
            <small>Listar</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url(); ?>Administrar/Usuario_Controller/agregar_usuario" class="btn btn-primary">
                            <span class="fa fa-plus"></span>Agregar Usuario</a>

                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">

                        <table id="tableusuarios" class="table table-bordered btn-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Tel</th>
                                    <th>Email</th>
                                    <th>Usuario</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>

                            </thead>
                            <tbody>
                                <print>
                                    <?php if (!empty($usuarios)) : ?>
                                        <?php foreach ($usuarios as $usuario) : ?>

                                            <td><?php echo $usuario->id_usuarios; ?></td>
                                            <td><?php echo $usuario->nombre; ?></td>
                                            <td><?php echo $usuario->apellidos; ?></td>
                                            <td><?php echo $usuario->telefono; ?></td>
                                            <td><?php echo $usuario->email; ?></td>
                                            <td><?php echo $usuario->usuario; ?></td>
                                            <?php
                                            if ($usuario->estado == 1) {
                                                echo '<td bgcolor=#008f39 align="center"><font color="white">Activo</font></td';
                                            } else {
                                                echo '<td bgcolor=#CB324 align="center"><font color="white">Inactivo</font></td';
                                            }
                                            ?>





                                            <?php $datosusuario = $usuario->id_usuarios . "*" . $usuario->nombre . "*" . $usuario->apellidos . "*" . $usuario->telefono . "*" . $usuario->email . "*" . $usuario->usuario . "*" . $usuario->estado; ?>
                                            </tr>

                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-ver-usuario" data-toggle="modal" data-target="#modal-usuario" 
                                                    value="<?php echo $datosusuario; ?>"><span class="fa fa-search"></span></button>

                                                    <a href="<?php echo base_url(); ?>Administrar/Usuario_Controller/editar_usuario/<?php echo $usuario->id_usuarios ?>"
                                                     class="btn btn-warning"><span class="fa fa-pencil"></span></a>

                                                    <a href="<?php echo base_url(); ?>Administrar/Usuario_Controller/eliminar_usuario/<?php echo $usuario->id_usuarios ?>" 
                                                    class="btn btn-danger"><span class="fa fa-remove"></span></a>
                                                </div>
                                            </td>

                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </print>  
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
<div class="modal fade" id="modal-usuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Informacion del Usuario</h4>
            </div>
            <!--final modal header-->
            <div class="modal-body">
                <?php echo $datosusuario; ?>
            </div>
            <!--Final Modal Body-->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
                    Cerrar
                </button>
            </div><!-- Final Modal Dialog Footer-->
        </div><!-- Final Modal content-->
    </div><!-- Final Modal Dialog-->
</div>
<!--Final modal Categoria>