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
        Ficha de salud escolar
        <small>Ficha de registro</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Ficha de registro</li>
        <li class="active">Nueva ficha</li>
        </ol>
        </section>
        <section class="content"><!--AQUI COMIENZA EL CONTENIDO -->
        <div class="row">
         <div class="col-lg-12">
         	<div class="panel panel-warning">
         <div class="panel-heading">
         	<h4></h4>
         </div>
         <div class="panel-body">
         		 <form role="form" method="POST" action="php/guardarFicha.php" enctype="multipart/form-data" id="nuevaFicha">
          	<!--MENU DE OPCIONES-->
          	<div class="col-lg-12">
          <div class="box box-solid">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->


          </div>
          <!-- /.box -->
        </div>
          	<!--FIN DEL MENU OPCIONES-->
          	  <div class="col-lg-6"><!--informacion personal-->
          		<div class="box box-warning">
          			<div class="box-header with-border">
	    			<i class="fa fa-pencil"></i>
	    			<h3 class="box-title">INFORMACIÓN PERSONAL</h3>
	    			</div>
	    			<div class="box-body">
	    				<div class="form-group">
                <!--Numero de identidad-->
	    					<label for="identidad">* Numero de identidad</label>
							<input class="form-control" maxlength="13" required="required" type="text" name="identidad" placeholder="" onkeypress="return soloNumero(event)"/>
	    				</div>
	    				<div class="form-group">
	    					<label for="nombre">* Nombre de niño(a)</label>
	    					<input  type="text" onBlur="javascript:this.value=this.value.toUpperCase();"  name="nombre" maxlength="40" required="required" class="form-control"/>
	    				</div>
	    				<div class="form-group"><!--Fecha de nacimiento y edad-->
	    				<div class="col-xs-6">
	    					<label for="fecha">* Fecha de nacimiento</label>
	    					<div class="input-group">
                  			<input onBlur="getAge()" class="form-control" type="text" name="fecha" id="fecha" required="required"/>
                  			<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  			</div>
	    				</div>
	    				<div class="col-xs-6">
	    					<label for="edad">* Edad</label>
	    					<input readonly="readonly" type="number" min="1" max="99" required="required" id="edad" name="edad" class="form-control"/>
	    				</div>
	    				</div>
	    				<div class="form-group"><!--Responsable-->
	    					<label for="responsable">Nombre del responsable</label>
	    					<input type="text" maxlength="40" onBlur="javascript:this.value=this.value.toUpperCase();" required="required" name="responsable" class="form-control" />
	    				</div>
              <div class="form-group"><!--Responsable-->
	    					<label for="contacto_responsable">Contacto del responsable</label>
	    					<input type="text" maxlength="40"  onBlur="javascript:this.value=this.value.toUpperCase();" required="required" name="contacto_responsable" class="form-control" />
	    				</div>
	    				<div class="form-group">
	    					<div class="col-xs-6">
	    						<label for="grado">Grado</label>
	    						<select name="grado" class="form-control">
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
	    						<label for="seccion">Sección</label>
	    						<input  type="number" min="1" max="99" required="required" name="seccion" class="form-control"/>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
          	</div>
          	<div class="col-lg-6"><!--informacion general-->
          		<div class="box box-warning">
          			<div class="box-header with-border">
	    				<i class="fa fa-pencil"></i>
	    				<h3 class="box-title">INFORMACIÓN GENERAL</h3>
	    			</div>
	    			<div class="box-body">
	    				<div class="form-group"><!--Establecimiento escolar-->
	    					<label for="establecimiento">* Establecimiento escolar</label>
	    						<select class="form-control" name="escuela" required="required">
	    							<option value="ESCUELA SANTA TERESA DE JESUS">ESCUELA SANTA TERESA DE JESÚS</option>
	    							<option value="SANTA CLARA">SANTA CLARA</option>
	    							<option value="VIRGEN DE SUYAPA ">VIRGEN DE SUYAPA</option>
	    						</select>
	    				</div>
	    				<div class="form-group"><!--Direccion-->
	    				<label for="form-group">Dirección</label>
	    					<input name="direccion"  type="text" maxlength="199" class="form-control" onBlur="javascript:this.value=this.value.toUpperCase();"/>
	    				</div>
	    				<div class="form-group">
	    					<label for="municipio">* Municipio</label>
	    					<input  type="text" required="requied" name="municipio" value="DISTRITO CENTRAL" readonly="readonly" class="form-control"/>
	    				</div>
	    				<div class="form-group"><!--Departamento-->
	    					<label for="departamento">* Departamento</label>
	    					<input type="text" readonly="readonly" name="departamento" value="FRANCISCO MORAZÁN" class="form-control" required="required"/>
	    				</div>
	    			</div>
          		</div>
          	</div>
			<!--Fotografia-->
			<!-- <div class="col-lg-6">
				<div class="box box-warning">
					<div class="box-header with-border">
	    			<i class="fa fa-pencil"></i>
	    			<h3 class="box-title">FOTOGRAFÍA</h3>
	    		</div>
	    		<div class="box-body">
	    		<div class="form-group">
                    	 <input class="btn btn-warning" type="file" name="imagen"/>
           			</div>
				</div>
				</div>
			</div> -->

          <div class="box-body">
        <input type="submit" class="btn btn-warning btn-flat pull-right" value="Guardar Ficha"/>
        <a href="javascript:limpiar();" class="btn btn-danger btn-flat pull-right">Limpiar Ficha</a>
          </div>
        </form>
          <!-- /.box-body -->
         	</div>
         </div>
         </div>
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
	$(document).ready(function(){
    $("#fecha").datepicker({
        defaultDate: new Date(),
        format: 'yyyy-mm-dd',
        //daysOfWeekDisabled: [0,6],
         endDate: '+0d',
        })
})
function soloNumero(e){
    tecla = (document.all) ? e.keyCode : e.which;
    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
    }
    function limpiar() {
    document.getElementById("nuevaFicha").reset();
  }

  function getAge(){
    var hoy = new Date();
    var fechaNacimiento = new Date($("#fecha").val());
    var edad = hoy.getFullYear()-fechaNacimiento.getFullYear();
    var mes = hoy.getMonth() - fechaNacimiento.getMonth();
    if (mes < 0 || ( mes==0) && hoy.getDate() < fechaNacimiento.getDate()){
      edad--;
    }
    $("#edad").val(edad);
  }
</script>


<?php
include 'inc/plugins.inc';
include 'inc/fin.inc';
?>
