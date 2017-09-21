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
        <small>Modificar Examen</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Panel de Control</a></li>
        <li>Examenes</li>
        <li class="active">Modificar Examen</li>
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
if(isset($_GET['idExamen']))
{
require 'php/conexion.php';
$idExamen = $_GET['idExamen'];

  $examenFisico = mysql_query("select * from examen where id='".$idExamen."'");
  $Examen = mysql_fetch_array($examenFisico);

// Se puede cambiar la consulta y solo hacer Una
//   SELECT
//     *
// FROM
//     examen
// WHERE
//     id = 2
// INNER JOIN ficha ON examen.identidad = ficha.identidad

$identidad=$Examen['identidad'];

//BUSCA FICHA
$registro = mysql_query("select * from ficha where identidad='".$identidad."'");
    $Ficha = mysql_fetch_array($registro);
    ?>
          <div class="box box-widget widget-user-2">

            <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;">
              <div class="widget-user-image">
              <br>
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
     <form role="form" method="POST" action="php/editarExamenFisico.php" enctype="multipart/form-data" id="Formulario">
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
          <input value="<?php echo $Examen['pa'];?>" class="form-control" type="number" min="0" step="0.01" name="pa" maxlength="10" required="required" placeholder="70/100" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div class="col-lg-2">
          <label>FR (RPM):</label>
          <input value="<?php echo $Examen['fr'];?>" class="form-control" type="number" min="0" step="0.01" name="fr" maxlength="10" required="required"  onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div class="col-lg-2">
          <label>Temperatura (ºC):</label>
          <input value="<?php echo $Examen['temperatura'];?>" class="form-control" type="number" name="t" min="0" step="0.01" maxlength="10" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div class="col-lg-2">
        <label>Peso (Kilos):</label>
          <input value="<?php echo $Examen['peso'];?>" id="peso" class="form-control" type="number" min="0" step="0.01" name="peso" maxlength="10" required="required" onBlur="calcularIMC();"/>
        </div>
        <div class="col-lg-2">
          <label>Talla (Metros):</label>
          <input value="<?php echo $Examen['talla'];?>" id="talla" class="form-control" type="number" name="talla" min="0" step="0.01" maxlength="10" required="required" onBlur="calcularIMC();"/>
        </div>
        <div class="col-lg-2">
        <label>IMC:</label>
          <input value="<?php echo $Examen['imc'];?>" id="imc" class="form-control" readonly="readonly"  type="number" min="0" step="0.01"  name="imc" maxlength="10" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>
      </div>
    </div>
         <!--////////////////////////////////////-->

         <div class="box box-warning">
         <div class="box-header with-border">
           <h3 class="box-title"><i class="fa fa-folder-open"></i>Agudeza Visual</h3>
         </div>
         <div class="box-body">
           <div class="col-lg-6">
             <label>* Ojo Derecho</label>
             <!-- <input type="text" maxlength="20" required="required" name="od" class="form-control" onBlur="javascript:this.value=this.value.toUpperCase();"/> -->
             <select value="<?php echo $Examen['ojo_derecho'];?>" name="od" class="form-control">
               <option value="20/20">20/20</option>
              <option value="20/30">20/30</option>
              <option value="20/40">20/40</option>
              <option value="20/50">20/50</option>
              <option value="20/70">20/70</option>
               <option value="20/100">20/100</option>
               <option value="20/200">20/200</option>
             </select>

           </div>
         <div class="col-lg-6">
         <label>* Ojo Izquierdo</label>
         <!-- <input type="text" maxlength="20" required="required" name="oi" class="form-control" onBlur="javascript:this.value=this.value.toUpperCase();"/> -->
         <select value="<?php echo $Examen['ojo_izquierdo'];?>" name="oi" class="form-control">
           <option value="20/20">20/20</option>
          <option value="20/30">20/30</option>
          <option value="20/40">20/40</option>
          <option value="20/50">20/50</option>
          <option value="20/70">20/70</option>
           <option value="20/100">20/100</option>
           <option value="20/200">20/200</option>
         </select>
         </div>
 <div class="col-lg-12">
         <div>
             <label>* Observaciones Visual</label>
             <input value="<?php echo $Examen['observaciones_visual'];?>" type="text" name="observaciones_visual" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();" />
         </div>
         </div>
         </div>
         </div>


  <div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-folder-open"></i>Exploración por órganos aparatos y sistemas</h3>
  </div>
  <div class="box-body">

            <div>
                <label>* Cabeza</label>
                <input type="text" name="cabeza" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();" value="<?php echo $Examen['cabeza'];?>"/>
            </div>
            <div>
                <label>* Oídos</label>
                <input value="<?php echo $Examen['oidos'];?>" type="text" name="oidos" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
                <label>* Nariz</label>
                <input value="<?php echo $Examen['nariz'];?>" type="text" name="nariz" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
                <label>* Faringe</label>
                <input value="<?php echo $Examen['faringe'];?>" type="text" name="faringe" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
                <label>* Escoliosis</label>
                <input value="<?php echo $Examen['escoliosis'];?>" type="text" name="escoliosis" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
                <label>* Dental</label>
                <input value="<?php echo $Examen['dental'];?>" type="text" name="dental" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
                <label>* Cuello</label>
                <input value="<?php echo $Examen['coello'];?>" type="text" name="coello" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            <div>
                <label>* Tórax</label>
                <input value="<?php echo $Examen['torax'];?>" type="text" name="torax" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <label>* Corazón</label>
              <input value="<?php echo $Examen['corazon'];?>" type="text" name="corazon" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <label>* Abdomen</label>
              <input value="<?php echo $Examen['abdomen'];?>" type="text" name="abdomen" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <label>* Genitales</label>
              <input value="<?php echo $Examen['genitales'];?>" type="text" name="genitales" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <label>* Extremidades</label>
              <input value="<?php echo $Examen['extremidades'];?>" type="text" name="extremidades" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <label>* Piel y faneras</label>
              <input value="<?php echo $Examen['piel'];?>" type="text" name="piel" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <label>* Observación</label>
              <input value="<?php echo $Examen['observaciones'];?>" type="text" name="observaciones" maxlength="199" class="form-control"  onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <input value="<?php echo $idExamen;?>"  name="idExamen" style="visibility: hidden;" />

            <div>
            <br>
              <input type="submit" class="btn btn-warning btn-flat pull-right" value="Modificar Examen Físico"/>
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
    document.getElementById("Formulario").reset();
  }
</script>

<script type="text/javascript">
function calcularIMC() {
var talla = $("#talla").val();
var peso=$("#peso").val();
var imc=peso/(talla*talla);

$("#imc").val(imc.toFixed(2));
}
</script>


<?php
include 'inc/plugins.inc';
include 'inc/fin.inc';
?>
