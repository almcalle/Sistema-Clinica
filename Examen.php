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
          <input class="form-control" type="number" min="0" step="0.01" name="pa" maxlength="10" required="required" placeholder="70/100" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div class="col-lg-2">
          <label>FR (RPM):</label>
          <input class="form-control" type="number" min="0" step="0.01" name="fr" maxlength="10" required="required"  onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div class="col-lg-2">
          <label>Temperatura (ºC):</label>
          <input class="form-control" type="number" name="t" min="0" step="0.01" maxlength="10" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div class="col-lg-2">
        <label>Peso (Kilos):</label>
          <input id="peso" class="form-control" type="number" min="0" step="0.01" name="peso" maxlength="10" required="required" onBlur="calcularIMC();"/>
        </div>
        <div class="col-lg-2">
          <label>Talla (Metros):</label>
          <input id="talla" class="form-control" type="number" name="talla" min="0" step="0.01" maxlength="10" required="required" onBlur="calcularIMC();"/>
        </div>
        <div class="col-lg-2">
        <label>IMC:</label>
          <input id="imc" class="form-control" readonly="readonly"  type="number" min="0" step="0.01"  name="imc" maxlength="10" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
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
             <select value="20/20" name="od" class="form-control">
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
         <select value="20/20" name="oi" class="form-control">
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
             <input type="text" name="observaciones_visual" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();" value="NORMAL"/>
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
                <input type="text" name="cabeza" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();" value="NORMOCÉFALO, NO PEDICULOSIS"/>
            </div>
            <div>
                <label>* Oídos</label>
                <input value="NORMAL" type="text" name="oidos" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
                <label>* Nariz</label>
                <input value="NORMAL" type="text" name="nariz" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
                <label>* Faringe</label>
                <input value="NORMAL" type="text" name="faringe" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
                <label>* Escoliosis</label>
                <input value="NO" type="text" name="escoliosis" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
                <label>* Dental</label>
                <input value="SIN CARIES" type="text" name="dental" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
                <label>* Cuello</label>
                <input value="NORMAL" type="text" name="coello" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            <div>
                <label>* Tórax</label>
                <input value="NORMAL" type="text" name="torax" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <label>* Corazón</label>
              <input value="NORMAL" type="text" name="corazon" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <label>* Abdomen</label>
              <input value="NORMAL" type="text" name="abdomen" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <label>* Genitales</label>
              <input value="NORMAL" type="text" name="genitales" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <label>* Extremidades</label>
              <input value="NORMAL" type="text" name="extremidades" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <label>* Piel y faneras</label>
              <input value="NORMAL" type="text" name="piel" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
            </div>
            <div>
            <label>* Observación</label>
              <input type="text" name="observaciones" maxlength="199" class="form-control"  onBlur="javascript:this.value=this.value.toUpperCase();"/>
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
