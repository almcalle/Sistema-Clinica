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
        <div class="row">
          <div class="col-lg-12">
          <section id="tabla_resultado">
        <!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
        <?php
        require 'php/conexion.php';
        $id = $_POST['id'];


        $registro = mysql_query("SELECT DISTINCT * FROM ficha ") or die(mysql_error());


      echo '<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
                      <tr>
                         <th width="100">IDENTIDAD</th>
                         <th width="200">NOMBRE</th>
                    <th width="100">ACCIONES</th>
                      </tr>
        </thead>
         <tbody>';

      while($registro2 = mysql_fetch_array($registro)){
        $consulta = mysql_query("select nombre from ficha where identidad='".$registro2['identidad']."'") or die(mysql_error());
        $nombre = mysql_fetch_array($consulta);
        echo'<tr>
                  <td>'.$registro2['identidad'].'</td>
                  <td>'.$nombre['nombre'].'</td>
                        <td><a href="javascript:detalleDiagnostico('.$registro2['id'].');" class="glyphicon glyphicon-search" data-toggle="tooltip" title="Ver Detalle"></a>&nbsp;&nbsp;&nbsp;<a href="javascript:borrarFicha('.$registro2['identidad'].');" class="fa fa-trash" data-toggle="tooltip" title="borrar Evaluación"></a>
                        &nbsp;&nbsp;&nbsp;<a href="Examen.php?id='.$registro2['identidad'].'" class="fa fa-external-link" data-toggle="tooltip" title="Nuevo Examen Fisíco"></a>
				        &nbsp;&nbsp;&nbsp;<a href="Evaluacion.php?id='.$registro2['identidad'].'" class="fa fa-pencil-square" data-toggle="tooltip" title="Nueva Evaluación"></a>
                        &nbsp;&nbsp;&nbsp;<a href="Anamnesis.php?id='.$registro2['identidad'].'" class="fa fa-pencil" data-toggle="tooltip" title="Nuevo Anamnesis"></a>
                        &nbsp;&nbsp;&nbsp;<a href="Diagnostico.php?id='.$registro2['identidad'].'" class="fa fa-server" data-toggle="tooltip" title="Nuevo Diagnostico"></a>
				</td>
				</tr>';
      }
        echo '</tbody></table>';

        ?>
        </section>
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
<script src = "/js/jquery.dataTables.js" type="text/javascript"></script>
<script type="text/javascript">
    function borrarFicha(id){
		var url = 'php/borrarFicha.php';
		var pregunta = confirm('¿Esta seguro de eliminar esta Ficha?');
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
