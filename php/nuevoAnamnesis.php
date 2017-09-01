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
              <!-- <div class="widget-user-image">
              <br>
              <!-- <center><img class="img-circle" src="<?php echo "img/".$Ficha['foto']; ?>" alt="<?php echo "img/".$registro['foto']; ?>" id="fotoGrande" /></center> -->
              </div> -->
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
  <form method="post" action="php/guardarAnamnesis.php" id="miform">
    <div class="box  box-primary">
      <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-folder-open"></i>Datos personales</h3>
      </div>
      <div class="box-body">
          <div>
          <label>Identidad</label>
              <input class="form-control" readonly="readonly" name="identidad" required="required" value="<?php echo $Ficha['identidad']; ?>" />
          </div>
        <div>
          <label>Nombre</label>
          <input class="form-control" type="text" name="nombre" maxlength="30" required="required" readonly="readonly" value="<?php echo $Ficha['nombre']; ?>"/>
        </div>
        <div>
          <label>Dirección</label>
          <input type="text" name="direccion" maxlength="200" required="required" readonly="readonly" class="form-control" value="<?php echo $Ficha['direccion']; ?>">
        </div>
        <div class="col-lg-3">
          <label>Sexo</label>
          <select name="sexo" class="form-control">
            <option value="M">M</option>
            <option value="F">F</option>
          </select>
        </div>
        <div class="col-lg-4">
          <label>Estado Civil</label>
          <select name="estado" class="form-control">
            <option value="SOLTERO (A)">SOLTERO (A)</option>
            <option value="CASADO (A)">CASADO (A)</option>
          </select>
        </div>
        <div class="col-lg-3">
          <label>Edad</label>
          <input type="number" name="edad" readonly="readonly" class="form-control" value="<?php echo $Ficha['edad']; ?>">
        </div>
      </div>


    </div>

<!--/////////////////////////////////////////////////////////////////-->
    <div class="box  box-primary">
      <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-folder-open"></i>Funciones Orgánicas</h3>
      </div>
      <div class="box-body">
        <div class="col-lg-6">
          <label>Apetito</label>
          <input class="form-control" type="text" name="apetito" maxlength="200" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div class="col-lg-6">
          <label>Micción</label>
          <input class="form-control" type="text" name="miccion" maxlength="200" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div class="col-lg-6">
          <label>Defecación</label>
          <input class="form-control" type="text" name="defecacion" maxlength="200" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div class="col-lg-6">
        <label>Sueño</label>
          <input class="form-control" type="text" name="sueno" maxlength="200" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        </div>
      </div>
    </div>
    <!--/////////////////////////////////////////////////////////////////-->
   <div class="box  box-primary">
      <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-folder-open"></i>Antecedentes Personales</h3>
      </div>
      <div class="box-body">
        <div>
          <label>Enfermedades Crónicas</label>
          <input class="form-control" type="text" name="enfe_cronicas" maxlength="200" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div>
          <label>Medicamentos que actualmente</label>
          <input class="form-control" type="text" name="medicamentos" maxlength="200" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div>
          <label>Antecedentes Alérgicos</label>
          <input class="form-control" type="text" name="ante_alergicos" maxlength="200" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        </div>
      </div>
    </div>
    <!--/////////////////////////////////////////////////////////////////-->
       <div class="box  box-primary">
      <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-folder-open"></i>Hábitos Tóxicos</h3>
      </div>
      <div class="box-body">
        <div>
          <label>Hábitos Tóxicos</label>
          <input class="form-control" type="text" name="habitos_toxicos" maxlength="200" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        </div>
      </div>
    </div>
    <!--/////////////////////////////////////////////////////////////////-->
    <div class="box  box-primary">
      <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-folder-open"></i>Antecedentes quirúrgicos / hospitalarios</h3>
      </div>
      <div class="box-body">
        <div>
          <label>Antecedentes quirúrgicos / hospitalarios</label>
          <input class="form-control" type="text" name="ant_hospitalarios" maxlength="100" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        </div>
      </div>
    </div>
    <!--//////////////////////////////////////////////////////////////////-->

    <!--/////////////////////////////////////////////////////////////////-->
    <div class="box  box-primary">
      <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-folder-open"></i>Historia de enfermedad actual</h3>
      </div>
      <div class="box-body">
        <div>
          <label>Historia de enfermedad actual</label>
          <input class="form-control" type="text" name="historial_enfermedades" maxlength="100" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        </div>
      </div>
    </div>
    <!--//////////////////////////////////////////////////////////////////-->
    <div class="box  box-primary">
      <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-folder-open"></i>Antecedentes patológicos familiares</h3>
      </div>
      <div class="box-body">
        <div>
          <label>Antecedentes patológicos familiares</label>
          <input class="form-control" type="text" name="antecedentes_familiares" maxlength="100" required="required" onkeyup="javascript:this.value=this.value.toUpperCase();"/>
        </div>
      </div>
    </div>

    <input type="submit" class="btn btn-primary btn-flat pull-right" value="Guardar Ficha"/>
    <a href="javascript:limpiar();" class="btn btn-danger btn-flat pull-right">Limpiar Ficha</a>
  </form>
</div>




<?php
}
?>
