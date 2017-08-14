<?php
require 'conexion.php';
$buscar = $_POST['buscar'];
//BUSCA FICHA
$registro = mysql_query("select * from ficha where identidad='".$buscar."'");
$reg = mysql_num_rows($registro);
if ($reg==0) {
	echo"<div class=\"alert alert-block alert-info\">
	<h4>Lo sentimos!</h4>El Registro no fue encontrado.<a href='../nuevaFicha.php'> Registrar una nueva ficha?</a>
	</div>";
}
else{
	 $Ficha = mysql_fetch_array($registro);
	//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX
mysql_close($conexion);
?>
            <style type="text/css">
                textarea {
                    resize: none;
                }
            </style>
<div class="col-lg-12">
<div class="box box-primary">
<div class="box-header with-border">
  <h3 class="box-title"><i class="fa fa-folder-open"></i>Información de paciente</h3>
</div>
<div class="box-body">


          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.jpg') center center;">
              <div class="widget-user-image">
              <br>
              <center><img class="img-circle" src="<?php echo "img/".$Ficha['foto']; ?>" alt="<?php echo "img/".$registro['foto']; ?>" id="fotoGrande" /></center>
              </div>
              <!-- /.widget-user-image -->
              <center>
                <h3 class="widget-user-username"><?php echo $Ficha['nombre']; ?></h3>
                <h5 class="widget-user-desc"><?php echo $Ficha['grado'],"-",$Ficha['seccion']; ?></h5>
              </center>
              <br>
            </div>
          </div>

          <!-- /.widget-user -->
</div>
    </div>
</div>  
<!--FIN del la ficha de consulta-->
<div class="col-lg-12">
     <form role="form" method="POST" action="php/guardarExamen.php" enctype="multipart/form-data" id="miForm">
    <!--/////////////////////////////////////////////////////////////////-->

    <div class="box  box-primary">
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
  <div class="box box-primary">
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
              <input type="submit" class="btn btn-primary btn-flat pull-right" value="Guardar Ficha"/>
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