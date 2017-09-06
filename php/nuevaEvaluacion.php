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
} else {
    $Ficha = mysql_fetch_array($registro);
    //CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX
    mysql_close($conexion); ?>
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
            <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.jpg') center center;"">
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
          </div>

          <!-- /.widget-user -->
</div>
<!--FIN del la ficha de consulta-->
<form method="post" action="php/guardarEvaluacion.php" id="miForm">
<!-- <div class="col-lg-12">
  <div class="box box-danger">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-folder-open"></i>Agudeza Visual</h3>
  </div>
  <div class="box-body">
  <div class="col-lg-6">
  <label>* Ojo Izquierdo</label>
  <input type="text" maxlength="20" required="required" name="oi" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
  </div>
    <div class="col-lg-6">
    <label>* Ojo Derecho</label>
    <input type="text" maxlength="20" required="required" name="od" class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
  </div>
</div>
</div>
    </div> -->
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
                <input type="submit" class="btn btn-primary btn-flat pull-right" value="Guardar Ficha"/>
                <a href="javascript:limpiar();" class="btn btn-danger btn-flat pull-right">Limpiar Ficha</a>
                </div>
            </div>
        </div>

    </div>
</form>
<?php
}
?>
