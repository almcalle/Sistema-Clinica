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
        Examenes
        <small>Nuevo Examen</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Panel de Control</a></li>
        <li>Examenes</li>
        <li class="active">Nuevo Examen</li>
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
              <center><img class="img-circle" src="<?php echo "img/".$Ficha['foto']; ?>" alt="<?php echo "img/".$Ficha['foto']; ?>" id="fotoGrande" /></center>
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
     <form role="form" method="POST" action="php/guardarExamen.php" enctype="multipart/form-data" id="miForm">
    <!--/////////////////////////////////////////////////////////////////-->

    <div class="box  box-warning">
      <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-folder-open"></i>Examen Físico</h3>
      </div>
      <div class="box-body">
            <div class="form-group"><!--Numero de identidad-->
                <label>* Numero de identidad</label>
                <input class="form-control" maxlength="13" readonly="readonly" required="required" type="text" name="identidad" placeholder="" value="<?php echo $Ficha['identidad']; ?>" />
            </div>
        <div class="col-lg-2">

          <label>PA:</label>
          <input class="form-control" type="text" name="pa" maxlength="10" required="required" placeholder="70/100" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div class="col-lg-2">
          <label>FR:  (PX)</label>
          <input class="form-control" type="text" name="fr" maxlength="10" required="required"  onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div class="col-lg-2">
          <label>T:</label>
          <input class="form-control" type="text" name="t" maxlength="10" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div class="col-lg-2">
        <label>Peso (Kilos)</label>
          <input class="form-control" type="text" name="peso" maxlength="10" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div class="col-lg-2">
          <label>Talla:</label>
          <input class="form-control" type="text" name="talla" maxlength="10" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div class="col-lg-2">
        <label>IMC:</label>
          <input class="form-control" type="text" name="imc" maxlength="10" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        </div>
      </div>
    </div>
         <!--////////////////////////////////////-->
  <div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-folder-open"></i>Exploración por órganos aparatos y sistemas</h3>
  </div>
  <div class="box-body">

            <div>
                <label>* Cabeza</label>
                <input type="text" name="cabeza" maxlength="40" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
                <label>* Oídos</label>
                <input type="text" name="oidos" maxlength="40" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
                <label>* Nariz</label>
                <input type="text" name="nariz" maxlength="40" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
                <label>* Coello</label>
                <input type="text" name="coello" maxlength="40" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            <div>
                <label>* Tórax</label>
                <input type="text" name="torax" maxlength="40" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <label>* Corazón</label>
              <input type="text" name="corazon" maxlength="40" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <label>* Abdomen</label>
              <input type="text" name="abdomen" maxlength="40" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <label>* Genitales</label>
              <input type="text" name="genitales" maxlength="40" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <label>* Extremidades</label>
              <input type="text" name="extremidades" maxlength="40" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <label>* Piel y faneras</label>
              <input type="text" name="piel" maxlength="40" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <label>* OBSERVACION</label>
              <input type="text" name="observaciones" maxlength="40" class="form-control"  onkeyup="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <br>
              <input type="submit" class="btn btn-warning btn-flat pull-right" value="Guardar Ficha"/>
              <a href="javascript:limpiar();" class="btn btn-danger btn-flat pull-right">Limpiar Ficha</a>
            </div>

            </div>
</div>
         </div>
          </form>
</div>
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
