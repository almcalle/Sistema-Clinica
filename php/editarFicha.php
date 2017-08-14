<?php
header("Content-Type: text/html;charset=utf-8");
require 'conexion.php';
$buscar = $_POST['id'];

//BUSCA FICHA

$registro = mysql_query("select * from ficha where identidad='".$buscar."'");
$reg = mysql_num_rows($registro);
if ($reg==0) {
	echo"<div class=\"alert alert-block alert-warning\">
	<h4>Lo sentimos!</h4>El Registro no fue encontrado.
	</div>";
}
else{
	 $Ficha = mysql_fetch_array($registro);
	//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

?>
<div class="box box-primary">
<div class="box-header with-border">
          <h3 class="box-title">Actualizar datos</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div><!-- /.box-tools -->
</div>
<div class="box-body">
<form method="post" action="/php/actualizarFicha.php">
	<div class="form-group"><!--Numero de identidad-->
	    <label for="identidad">* Numero de identidad</label>
		<input class="form-control" maxlength="14" required="required" type="text" name="identidad" placeholder="" onkeypress="return soloNumero(event)" value="<?php echo $Ficha['identidad']; ?>" readonly="readonly" />
	</div>
	<div class="form-group">
	    <label for="nombre">* Nombre de ni&ntilde;o(a)</label>
	    <input  type="text" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" name="nombre" maxlength="40" required="required" class="form-control" value="<?php echo $Ficha['nombre']; ?>"/>
	</div>
 <div class="form-group"><!--Fecha de nacimiento y edad-->
		<div class="col-xs-6">
		<label for="fecha">* Fecha de nacimiento</label>
 		<div class="input-group">
    	<input class="form-control" type="text" name="fecha" id="fecha" required="required" value="<?php echo $Ficha['fecha_nacimiento']; ?>" readonly="readonly"/>
    	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
		</div>
	    </div>
	    <div class="col-xs-6">
	    <label for="edad">* Edad</label>
	    <input  type="number" min="1" max="99" required="required" name="edad" class="form-control" value="<?php echo $Ficha['edad']; ?>" min="1" max="99" maxlength="2"/>
	    </div>	    					
</div>
		<div class="form-group"><!--Responsable-->
	    <label for="responsable">Nombre del responsable</label>
	    <input type="text" maxlength="40" onkeyup="javascript:this.value=this.value.toUpperCase();" style="text-transform: uppercase;" required="required" name="responsable" class="form-control" value="<?php echo $Ficha['responsable']; ?>" />
		</div>
		<div class="form-group">
	    	<div class="col-xs-6">
	    	<label for="grado">Grado</label>
	    	<select name="grado" class="form-control" value="<?php echo $Ficha['grado']; ?>">
	    		<option value="PREPARATORIA">PREPARATORIA</option>
	    		<option value="PRIMERO">PRIMERO</option>
	    		<option value="SEGUNDO">SEGUNDO</option>
	    		<option value="TERCERO">TERCERO</option>
	    		<option value="CUARTO">CUARTO</option>
	    		<option value="QUINTO">QUINTO</option>
	    		<option value="SEXTO">SEXTO</option>
	    		<option value="SEPTIMO">SEPTIMO</option>
	    		<option value="OCTAVO">OCTAVO</option>
	    		<option value="NOVENO">NOVENO</option>
	    		<option value="DECIMO">DECIMO</option>
	    		<option value="ONCEAVO">ONCEAVO</option>
	    		<option value="DOCEAVO">DOCEAVO</option>
	    	</select>
	    	</div>
	    	<div class="col-xs-6">
	    		<label for="seccion">Secci&oacute;n</label>
	    		<input  type="number" min="1" max="9" maxlength="1" required="required" name="seccion" class="form-control" value="<?php echo $Ficha['seccion']; ?>"/>
	    	</div>
	    </div>
	    <div class="form-group"><!--Establecimiento escolar-->
	    <label for="establecimiento">* Establecimiento escolar</label>
	    <select class="form-control" name="escuela" required="required" value="<?php echo $Ficha['escuela']; ?>">
	    	<option value="ESCUELA SANTA TERESA DE JESUS">ESCUELA SANTA TERESA DE JESUS</option>
	    	<option value="SANTA CLARA">SANTA CLARA</option>
	    	<option value="SANTA CLARA">VIRGEN DE SUYAPA</option>
	    </select>
	    </div>
	    <div class="form-group">
	    	<label for="direccion">Direcci&oacute;n</label>
	    	<input name="direccion" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" maxlength="60" class="form-control" style="text-transform:uppercase;" value="<?php echo $Ficha['direccion']; ?>"/>
	    </div>
		<div class="form-group">
			<a class="btn btn-app" href="javascript:actualizarFicha(<?php echo $buscar;?>);" class="control-form">
      		  <i class="fa fa-save"></i> Guardar cambios
   			</a>
		</div>
</form>
</div>
</div>
<?php
}
mysql_close($conexion);
?>