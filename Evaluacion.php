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
        Evaluaciones
        <small>Nueva Evaluación</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Panel de Control</a></li>
        <li>Evaluaciones</li>
        <li class="active">Nueva Evaluación</li>
        </ol>
        </section>
        <section class="content"><!--AQUI COMIENZA EL CONTENIDO -->
        <div class="row">
            <div class="col-lg-12">
            <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-folder-open"></i>Información de paciente</h3>
            </div>
            <div class="box-body">
<?php
if(isset($_GET['id']))
{
require 'php/conexion.php';
$buscar = $_GET['id'];
//BUSCA FICHA
$registro = mysql_query("select * from ficha where identidad='".$buscar."'");
    $Ficha = mysql_fetch_array($registro);
    ?>
          <div class="box box-widget widget-user-2">

            <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;">
              <div class="widget-user-image">
              <br>
              <!-- <center><img class="img-circle" src="<?php echo "img/".$Ficha['foto']; ?>" alt="<?php echo "img/".$Ficha['foto']; ?>" id="fotoGrande" /></center> -->
              </div>
              <!-- /.widget-user-image -->
              <center>
                <h3 class="widget-user-username"><?php echo $Ficha['nombre']; ?></h3>
                <h5 class="widget-user-desc"><?php echo $Ficha['grado'],"-",$Ficha['seccion']; ?></h5>
              </center>
              <br>
            </div>
          </div>
            </div>
                </div>
            </div>
<!--FIN del la ficha de consulta-->
<form method="post" action="php/guardarEvaluacion.php" id="miForm">

<!--/////////////////////////////////////////////////////////////////////////////////////////////////-->
    <div class="col-lg-12">
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-folder-open"></i>Ficha de Evaluación Médica</h3>
        </div>
            <div class="box-body">
                <div class="col-lg-6">
                <label>Numero de Identidad</label>
                <input type="text" name="identidad" class="form-control" readonly="readonly" value="<?php echo $Ficha['identidad']; ?>">
                </div>
                <div class="col-lg-3">
                <label>Estrabismo</label>
                    <select name="estrabismo" class="form-control">
                    <option value="No">No</option>
                    <option value="Si">Si</option>
                    </select>
                </div>
                <div class="col-lg-3">
                <label>Pérdida Auditiva</label>
                    <select name="pa" class="form-control">
                    <option value="No">No</option>
                    <option value="Si">Si</option>
                    </select>
                </div>
                <div class="col-lg-3">
                <label>Trastornos de Formación</label>
                    <select name="tf" class="form-control">
                    <option value="No">No</option>
                    <option value="Si">Si</option>
                    </select>
                </div>
                <div class="col-lg-3">
                <label>Pediculosis</label>
                    <select name="pediculosis" class="form-control">
                    <option value="No">No</option>
                    <option value="Si">Si</option>
                    </select>
                </div>
                <div class="col-lg-3">
                <label>Escabiosis o Sarna</label>
                    <select name="sarna" class="form-control">
                    <option value="No">No</option>
                    <option value="Si">Si</option>
                    </select>
                </div>
                <div class="col-lg-3">
                <label>Sospecha de Anemia</label>
                    <select name="sa" class="form-control">
                    <option value="No">No</option>
                    <option value="Si">Si</option>
                    </select>
                </div>
                <div class="col-lg-3">
                <label>Sospecha de Violencia</label>
                    <select name="sv" class="form-control">
                    <option value="No">No</option>
                    <option value="Si">Si</option>
                    </select>
                </div>
                <div class="col-lg-3">
                <label>Problemas de Personalidad</label>
                    <select name="pp" class="form-control">
                    <option value="No">No</option>
                    <option value="Si">Si</option>
                    </select>
                </div>
                <div class="col-lg-3">
                <label>Problemas de Aprendizaje</label>
                    <select name="aprendizaje" class="form-control">
                    <option value="No">No</option>
                    <option value="Si">Si</option>
                    </select>
                </div>
                <div class="col-lg-3">
                <label>Uso de Drogas</label>
                    <select name="ud" class="form-control">
                    <option value="No">No</option>
                    <option value="Si">Si</option>
                    </select>
                </div>
                <div class="col-lg-12">
                <br>
                <input type="submit" class="btn btn-warning btn-flat pull-right" value="Guardar Ficha"/>
                <a href="javascript:limpiar();" class="btn btn-danger btn-flat pull-right">Limpiar Ficha</a>
                </div>
            </div>
        </div>

    </div>
</form>
<!--INICIO-->
<?php
}
?>
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
<script type="text/javascript">
  function limpiar() {
    document.getElementById("miForm").reset();
  }
</script>
<?php
include 'inc/plugins.inc';
include 'inc/fin.inc';
?>
