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
              <!-- <center><img class="img-circle" src="<?php echo "img/".$Ficha['foto']; ?>" alt="<?php echo "img/".$registro['foto']; ?>" id="fotoGrande" /></center> -->
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
  <div class="box box-primary">
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
                <textarea name="patologico" maxlength="200" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
            </div>
            <div>
                <label>* Diagnostico Nutricional</label>
                <textarea name="nutricional" maxlength="200" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
            </div>
            <div>
                <label>* Diagnostico Socioeconómico</label>
                <textarea name="socieconomico" maxlength="200" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
            </div>
            <div>
                <label>* Diagnostico Inmunológico</label>
                <textarea name="inmunologico" maxlength="200" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
            </div>
            <div>
                <label>* Diagnostico Etario</label>
                <textarea name="etario" maxlength="200" class="form-control" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"></textarea>
            </div>
            <div>
            <br>
              <input type="submit" class="btn btn-primary btn-flat pull-right" value="Guardar Ficha"/>
              <a href="javascript:limpiar();" class="btn btn-danger btn-flat pull-right">Limpiar Ficha</a>
            </div>
          </form>
  </div>
</div>
</div>
<?php
}
?>
