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
        Consulta de Diagnostico
        <small></small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Ficha de Diagnostico</li>
        <li class="active">Consulta de Diagnostico</li>
        </ol>
        </section>
        <section class="content"><!--AQUI COMIENZA EL CONTENIDO -->
        <div class=container>
          <div class="col-lg-7">
          <section id="tabla_resultado">
        <!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
        <?php
        require 'php/conexion.php';
        $id = $_POST['id'];


        $registro = mysql_query("SELECT DISTINCT * FROM diagnosticos ") or die(mysql_error());


      echo '<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
                      <tr>
                      <th width="100">ID</th>
                         <th width="100">IDENTIDAD</th>
                         <th width="200">NOMBRE</th>
                         <th width="200">CLASE</th>
                          <th width="200">FECHA</th>
                    <th width="100">ACCIONES</th>
                      </tr>
        </thead>
         <tbody>';

      while($registro2 = mysql_fetch_array($registro)){
        $consulta = mysql_query("select * from ficha where identidad='".$registro2['identidad']."'") or die(mysql_error());
        $ficha = mysql_fetch_array($consulta);
        echo'<tr>
                <td>'.$registro2['id'].'</td>
                  <td>'.$registro2['identidad'].'</td>
                  <td>'.$ficha['nombre'].'</td>
                  <td>'.$ficha['grado'].'-'.$ficha[seccion].'</td>
                   <td>'.$registro2['fecha'].'</td>
                        <td><a href="javascript:detalleDiagnostico('.$registro2['id'].');" class="glyphicon glyphicon-search" data-toggle="tooltip" title="Ver Detalle"></a>&nbsp;&nbsp;&nbsp;<a href="javascript:borrarDiagnostico('.$registro2['id'].');" class="fa fa-trash" data-toggle="tooltip" title="borrar Evaluación"></a></td>
                   </tr>';
      }
        echo '</tbody></table>';

        ?>
        </section>
            </div>
             <div class="col-lg-5">
            <center><ul class="pagination" id="pagination"></ul></center>
                <div class="registros" id="agrega-registros"></div>
            </div>

           </div>
         </section><!-- right col -->
    </div><!-- ./wrapper -->
       <?php
      include 'inc/footer.inc';
      ?>
     </div>

<?php
include 'inc/scripts.inc';
?>
<script src = "js/jquery.dataTables.js" type="text/javascript"></script>
<script type="text/javascript">
function detalleDiagnostico(id){
    var url = 'php/detalleDiagnostico.php';
    if(!id){
        }
        else{
        $.ajax({
        type:'POST',
        url:url,
        data:'id='+id,
        success: function(registros){
            $('#agrega-registros').html(registros);
            return false;
        }
        });
        }
    }
</script>
<script type="text/javascript">
    function borrarDiagnostico(id){
		var url = 'php/borrarDiagnostico.php';
		var pregunta = confirm('¿Esta seguro de eliminar el Diagnostico?');
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
