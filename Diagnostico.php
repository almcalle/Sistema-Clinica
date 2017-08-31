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
        Diagnostico
        <small>Nuevo Diagnostico</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Panel de Control</a></li>
        <li>Evaluaciones</li>
        <li class="active">Nuevo Diagnostico</li>
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
<div class="col-lg-12">
  <div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-folder-open"></i>Ficha de Diagnostico</h3>
  </div>
  <div class="box-body">
            <form role="form" method="POST" action="php/guardarDiagnostico.php" enctype="multipart/form-data" id="miForm">
            <div class="form-group"><!--Numero de identidad-->
                <label>* Numero de identidad</label>
                <input class="form-control" maxlength="13" readonly="readonly" required="required" type="text" name="identidad" placeholder="" value="<?php echo $Ficha['identidad']; ?>" />
            </div>
            <div>
                <label>* Diagnostico Patológico</label>
                <textarea name="patologico" maxlength="50" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
            </div>
            <div>
                <label>* Diagnostico Nutricional</label>
                <textarea name="nutricional" maxlength="50" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
            </div>
            <div>
                <label>* Diagnostico Socioeconómico</label>
                <textarea name="socieconomico" maxlength="50" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
            </div>
            <div>
                <label>* Diagnostico Inmunológico</label>
                <textarea name="inmunologico" maxlength="50" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
            </div>
            <div>
                <label>* Diagnostico Etario</label>
                <textarea name="etario" maxlength="50" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
            </div>
            <div>
            <br>
              <input type="submit" class="btn btn-warning btn-flat pull-right" value="Guardar Ficha"/>
              <a href="javascript:limpiar();" class="btn btn-danger btn-flat pull-right">Limpiar Ficha</a>
            </div>
          </form>
  </div>
</div>
</div>
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
