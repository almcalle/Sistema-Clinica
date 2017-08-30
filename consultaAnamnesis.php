<?php
require 'php/requerirUsuario.php';
include 'inc/inicio.inc';
?>    
      <div class="wrapper">
      <?php
      include 'inc/menu.inc';
      ?>
      <div class="content-wrapper">
        <section class="content-header">
        <h1>
        Consulta de Anamnesis
        <small></small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Ficha de Anamnesis</li>
        <li class="active">Consulta Anamnesis</li>
        </ol>
        </section>
        <section class="content"><!--AQUI COMIENZA EL CONTENIDO -->
        <div class="container">
        <div class="col-lg-7">
        <section id="tabla_resultado">
        <!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
        <?php
        require '/php/conexion.php';
        $id = $_POST['id'];


        $registro = mysql_query("SELECT * FROM anamnesis ") or die(mysql_error());


      echo '<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
                      <tr>
                      <th width="100">ID</th>
                         <th width="100">IDENTIDAD</th>
                         <th width="200">NOMBRE</th>
                          <th width="200">FECHA</th>
                    <th width="100">ACCIONES</th>
                      </tr>
        </thead>
         <tbody>';

      while($registro2 = mysql_fetch_array($registro)){
        $consulta = mysql_query("select nombre from ficha where identidad='".$registro2['identidad']."'") or die(mysql_error());
        $nombre = mysql_fetch_array($consulta);
        echo'<tr>
                <td>'.$registro2['id'].'</td>
                  <td>'.$registro2['identidad'].'</td>
                  <td>'.$nombre['nombre'].'</td>
                   <td>'.$registro2['fecha'].'</td>
                        <td><a href="javascript:detalleAnamnesis('.$registro2['id'].');" class="glyphicon glyphicon-search" data-toggle="tooltip" title="Ver Detalle"></a>&nbsp;&nbsp;&nbsp;<a href="javascript:borrarAnamnesis('.$registro2['id'].');" class="fa fa-trash" data-toggle="tooltip" title="borrar Evaluación"></a></td>
                   </tr>';
      }
        echo '</tbody></table>'; 
       
        ?>
        </section>
           <!--//////////////////////////////////AQUI SE MUESTRA LA INFORMACION/////////////////////////-->
            <br/>
          </div>
          <div class="col-lg-5"><!--AQUI SE MUESTRA LA INFORMACION-->
            <div class="registros" id="agrega-registros"></div>
            <center><ul class="pagination" id="pagination"></ul></center> 
          <div class="registros" id="agrega-registros"></div>
          <center><ul class="pagination" id="pagination"></ul></center>
           </div>
          </div>
         </section><!-- right col -->

        </div>
      <?php
      include 'inc/footer.inc';
      ?>
      </div><!-- ./wrapper -->
     
<?php
include 'inc/scripts.inc';
?>
<script src = "/js/jquery.dataTables.js" type="text/javascript"></script>
<script type="text/javascript">
function detalleAnamnesis(id){
    var url = '/php/detalleAnamnesis.php';
    if(!id){
        }
        else{
        $.ajax({
        type:'POST',
        url:url,
        data:'id='+id,
        success: function(registros){
            $('#agrega-registros').html(registros);
            $('#pagination').html("");
            return false;
        }
        });
        }
    }
</script>
<script type="text/javascript">
    function borrarAnamnesis(id){
		var url = '/php/borrarAnamnesis.php';
		var pregunta = confirm('¿Esta seguro de eliminar el Anamnesis?');
		if(pregunta==true){
			$.ajax({
			type:'POST',
			url:url,
			data:'id='+id,
			success: function(registro){
				$('#agrega-registros').html(registro);
			}
		});
		}else{
			return false;
		}
	}
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<?php
include 'inc/plugins.inc';
include 'inc/fin.inc';
?>