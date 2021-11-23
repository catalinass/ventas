        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->
    <script src="<?php echo base_url();?>assets/template/jquery/jquery.min.js"></script>

<script src="<?php echo base_url();?>assets/template/jquery/moment.min.js"></script>

<!-- Highcharts-->
<script src="<?php echo base_url();?>assets/template/highcharts/highcharts.js"></script>
<script src="<?php echo base_url();?>assets/template/highcharts/exporting.js"></script>
<script src="<?php echo base_url();?>assets/template/highcharts/export-data.js"></script>

<!-- DataTables Export-->
<script src="<?php echo base_url();?>assets/template/jquery/analytics.js"></script>
<script src="<?php echo base_url();?>assets/template/jquery/jquery-3.3.1.js"></script>
<script src="<?php echo base_url();?>assets/template/jquery/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/template/jquery/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>assets/template/jquery/dataTables.flash.min.js"></script>
<script src="<?php echo base_url();?>assets/template/jquery/buttons.flash.min.js"></script>
<script src="<?php echo base_url();?>assets/template/jquery/jszip.min.js"></script>
<script src="<?php echo base_url();?>assets/template/jquery/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>assets/template/jquery/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>assets/template/jquery/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>assets/template/jquery/buttons.print.min.js"></script>

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/template/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/template/jquery-ui/jquery-ui.js"></script>

<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/template/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>assets/template/datatables.net-bs/js/datatables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/template/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/template/dist/js/demo.js"></script>
<script>
$(document).ready(function (){
var base_url = "<?php echo base_url();?>"   
$('.sidebar-menu').tree()
///////////////Tablas Configuracion//////////
$('#tablacategorias').DataTable({
    "language":{
        "lengthMenu": "Mostrar _Menu_ registros por página",
        "zeroRecords": "No se encontraron resultados de búsqueda",
        "SearchPlaceHolder": "Buscar Registros",
        "info": "Mostrando registros _START_ al _END_ de un total de _TOTAL_ registros",
        "infoEmpty":"No Existen Registros",
        "infoFiltered": "(Filtrando de un total de _MAX_ registros)",
        "search": "Buscar",
        "Paginate":{
            "first": "primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
    }
});

$('#tablaclientes').DataTable({
    "language":{
        "lengthMenu": "Mostrar _Menu_ registros por página",
        "zeroRecords": "No se encontraron resultados de búsqueda",
        "SearchPlaceHolder": "Buscar Registros",
        "info": "Mostrando registros _START_ al _END_ de un total de _TOTAL_ registros",
        "infoEmpty":"No Existen Registros",
        "infoFiltered": "(Filtrando de un total de _MAX_ registros)",
        "search": "Buscar",
        "Paginate":{
            "first": "primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
    }
});

$('#tablaproductos').DataTable({
    responsive:true,

    dom:'Bftrip',
    buttons:[
    {
        extend:'excelHtml5',
        text: 'Exportar Excel',
        ClassName: 'excelButton',
        title: "Listado de productos",
        exportOptions:{
            columns:[0,1,2,3,4,5]
        }
    },
    {
        extend:'pdfHtml5',
        text: 'Exportar PDF',
        ClassName: 'pdfButton',
        title: "Listado de productos",
        exportOptions:{
            columns:[0,1,2,3,4,5]
        } 
    }
    ],
    language:{
        "lengthMenu": "Mostrar _Menu_ registros por página",
        "zeroRecords": "No se encontraron resultados de búsqueda",
        "SearchPlaceHolder": "Buscar Registros",
        "info": "Mostrando registros _START_ al _END_ de un total de _TOTAL_ registros",
        "infoEmpty":"No Existen Registros",
        "infoFiltered": "(Filtrando de un total de _MAX_ registros)",
        "search": "Buscar",
        "Paginate":{
            "first": "primero",
            "last": "Último",
            "next": "Siguiente",
            "previous": "Anterior"
        },
    }
});
//////////////// Visor Datos en Lista pop-up//////////////
$('.btn-ver-categoria').on("click", function(){
    var categoria = $(this).val();
    var infocategoria = categoria.split("*");
    html += "<p><strong>Código: </strong>"+infocategoria[0]+"</p>"
    html += "<p><strong>Nombre: </strong>"+infocategoria[1]+"</p>"
    html += "<p></strong>Descripción: </strong>"+infocategoria[2]+"</p>"
    if(infocategoria[3]=="1"){
          estado = "Activo";
      }else{
          estado = "Inactivo";
      }
      html += "<p><strong> Estado: </Strong>"+estado+"</p>"
      $("#modal-categoria. modal-body").html(html);

 });//Final ver Categoria

//////////////// Visor Datos en Lista pop-up - Cliente //////////////
$('.btn-ver-cliente').on("click", function(){
    var cliente = $(this).val();
    var infocliente = cliente.split("*");
    html += "<p><strong>Código: </strong>"+infocliente[0]+"</p>"
    html += "<p><strong>Identificación: </strong>"+infocliente[1]+"</p>"
    html += "<p><strong>Nombre: </strong>"+infocliente[2]+"</p>"
    html += "<p><strong>Primer Apellido: </strong>"+infocliente[3]+"</p>"
    html += "<p><strong>Segundo Apellido: </strong>"+infocliente[4]+"</p>"
    html += "<p><strong>Telefono: </strong>"+infocliente[5]+"</p>"
    html += "<p></strong>Empresa: </strong>"+infocliente[6]+"</p>"
    if(infocliente[7]=="1"){
          estado = "Activo";
      }else{
          estado = "Inactivo";
      }
      html += "<p><strong> Estado: </Strong>"+estado+"</p>"
      $("#modal-cliente .modal-body").html(html);

 });//Final ver Categoria

 $('.btn-ver-producto').on("click", function(){
    var productos = $(this).val();
    var infoproductos = productos.split("*");
    html += "<p><strong>Código: </strong>"+infoproductos[0]+"</p>"
    html += "<p><strong>Categoria: </strong>"+infoproductos[1]+"</p>"
    html += "<p><strong>Nombre: </strong>"+infoproductos[2]+"</p>"
    html += "<p></strong>Descripción: </strong>"+infoproductos[3]+"</p>"
    html += "<p></strong>Precio: </strong>"+infoproductos[4]+"</p>"
    html += "<p></strong>Stock: </strong>"+infoproductos[5]+"</p>"
    if(infoproductos[6]=="1"){
          estado = "Activo";
      }else{
          estado = "Inactivo";
      }
      html += "<p><strong>Estado: </Strong>"+estado+"</p>"
      $("#modal-producto .modal-body").html(html);

 });//Final ver Producto

});//Final document ready
</script>
</body>
</html>