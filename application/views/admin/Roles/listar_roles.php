  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              Roles
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
                          <a href="<?php echo base_url(); ?>Administrar/Roles_Controller/agregar_roles" class="btn btn-primary">
                              <span class="fa fa-plus"></span>Agregar Roles</a>

                      </div>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-md-12">

                          <table id="tableroles" class="table table-bordered btn-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Nombre</th>
                                      <th>Descripcion</th>


                              </thead>
                              <tbody>
                                  <?php if (!empty($roles)) : ?>
                                      <?php foreach ($roles as $rol) : ?>

                                          <td><?php echo $rol->id_rol; ?></td>
                                          <td><?php echo $rol->nombre; ?></td>
                                          <td><?php echo $rol->descripcion; ?></td>

                                          <?php $datosrol = $rol->id_rol . "*" . $rol->nombre . "*" . $rol->descripcion; ?>
                                        
                                          <td>
                                              <div class="btn-group">
                                                  <button type="button" class="btn btn-info btn-ver-rol" data-toggle="modal" data-target="#modal-rol" value="<?php echo $datosrol; ?>"><span class="fa fa-search"></span></button>
                                                  <a href="<?php echo base_url(); ?>Administrar/Roles_Controller/editar_roles/<?php echo $rol->id_rol ?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                                                  <a href="<?php echo base_url(); ?>Administrar/Roles_Controller/eliminar_rol/<?php echo $rol->id_rol ?>" class="btn btn-danger"><span class="fa fa-remove"></span></a>
                                              </div>
                                          </td>
                                          </tr>
                                      <?php endforeach; ?>
                                  <?php endif; ?>
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
  <div class="modal fade" id="modal-rol">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Informacion del rol</h4>

              </div>
              <!--final modal header-->
              <div class="modal-body">
              <?php echo $datosrol; ?>
              </div>
              <!--Final Modal Body-->
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"> Cerrar</button>
              </div><!-- Final Modal Dialog-->
          </div>
          <!--Final modal Categoria>