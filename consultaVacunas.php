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
        Consulta de Vacunas
        <small></small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Ficha de Diagnostico</li>
        <li class="active">Consulta de Vacunas</li>
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


        $registro = mysql_query("SELECT DISTINCT * FROM vacunas ") or die(mysql_error());


      echo '<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
                      <tr>
                         <th width="100">IDENTIDAD</th>
                         <th width="200">NOMBRE</th>
                         <th width="200">DIRECCION</th>
                          <th width="200">Vacunas que faltan</th>
                    <th width="100">ACCIONES</th>
                      </tr>
        </thead>
         <tbody>';

      while ($registro2 = mysql_fetch_array($registro)) {
          $consulta = mysql_query("select * from ficha where identidad='".$registro2['identidad']."'") or die(mysql_error());
          $nombre = mysql_fetch_array($consulta);
          $consultaVacunas = mysql_query("select * from vacunas where identidad='".$registro2['identidad']."'") or die(mysql_error());
          $vacunas = mysql_fetch_array($consultaVacunas);
          echo'<tr>
                  <td>'.$registro2['identidad'].'</td>
                  <td>'.$nombre['nombre'].'</td>
                  <td>'.$nombre['direccion'].'</td>
                   <td>';
                   $first=false;
                   if($vacunas['hepatitisB']=='0'){
                     if($first==true){
                       echo', ';
                     }
                       echo'Hepatitis B';
                       $first=true;
                   };
                   if($vacunas['poliomielitis']=='0'){
                     if($first==true){
                       echo', ';
                     }
                       echo'Poliomielitis';
                       $first=true;
                   };

                   echo'</td>

                        <td><a href="javascript:modificarVacunas('.$registro2['identidad'].');" class="glyphicon glyphicon-edit" data-toggle="tooltip" title="Ver Detalle"></a>&nbsp;&nbsp;
                        <!--
                        &nbsp;

                  <a href="javascript:borrarDiagnostico('.$registro2['id'].');" class="fa fa-trash" data-toggle="tooltip" title="borrar Evaluación"> -->

                        </a></td>
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
           <input type="button" class="btn btn-primary" onclick="window.print();" value="Imprimir listado" />

<!--window.print(); -->

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
function modificarVacunas(id){
    var url = 'php/nuevaVacuna.php';
    if(!id){
        }
        else{
        $.ajax({
        type:'POST',
        url:url,
        data:'buscar='+id,
        success: function(registros){
            $('#agrega-registros').html(registros);
            return false;
        }
        });
        }
    }
</script>
<script type="text/javascript">
    function borrarVacunas(id){
		var url = 'php/borrarVacunas.php';
		var pregunta = confirm('¿Esta seguro de eliminar las Vacunas?');
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
