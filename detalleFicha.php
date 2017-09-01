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
        Ficha del paciente
        <small>Detalle de ficha</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Panel de Control</a></li>
        <li>Ficha de salud</li>
        <li class="active">Detalle ficha de salud</li>
        </ol>
        </section>
        <section class="content"><!--AQUI COMIENZA EL CONTENIDO -->
        <div class="row">
          <!--AQUI COMIENZA EL CODIGO DE DE CONSULTA DE FICHA-->
            <?php
require 'php/conexion.php';
$identidad = $_GET['id'];
//BUSCA FICHA

$registro = mysql_query("select * from ficha where identidad='".$identidad."'");
$reg = mysql_num_rows($registro);
if ($reg==0) {
    echo"
    <div class=\"col-lg-12\">
    <div class=\"alert alert-block alert-info\">
	<h4>Lo sentimos!</h4>El Registro no fue encontrado.<a href='../nuevaFicha.php'> Registrar una nueva ficha?".$identidad."</a>
	</div></div>";
} else {
    $Ficha = mysql_fetch_array($registro);
    //CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX ?>

<div class="col-lg-6">
<div class="box box-warning">
<div class="box-header with-border">
  <h3 class="box-title"><i class="fa fa-folder-open"></i>Ficha de Salud Escolar</h3>
</div>
<div class="box-body">
	<!-- <center><img src="<?php echo "img/".$Ficha['foto']; ?>" alt="<?php echo "img/".$registro['foto']; ?>" id="fotoGrande" /></center> -->
	<br/>
	<dl class="dl-horizontal">
        <dt>Numero de identidad</dt>
        <dd><?php echo $identidad; ?></dd>
        <dt>Nombre:</dt>
        <dd><?php echo $Ficha['nombre']; ?></dd>
        <dt>Fecha de Nacimiento:</dt>
        <dd><?php echo $Ficha['fecha_nacimiento']; ?></dd>
        <dt>* Edad:</dt>
        <dd><?php echo $Ficha['edad']." A&ntilde;os"; ?></dd>
        <dt>Responsable:</dt>
        <dd><?php echo $Ficha['responsable']; ?></dd>
        <dt>Contacto Responsable:</dt>
        <dd><?php echo $Ficha['contacto_responsable']; ?></dd>
        <dt>* Grado:</dt>
        <dd><?php echo $Ficha['grado']; ?></dd>
        <dt>* Secci&oacute;n:</dt>
        <dd><?php echo $Ficha['seccion']; ?></dd>
        <dt>Escuela:</dt>
        <dd><?php echo $Ficha['escuela']; ?></dd>
        <dt>Direcci&oacute;n:</dt>
        <dd><?php echo $Ficha['direccion']; ?></dd>
        <dt>Departamento:</dt>
        <dd><?php echo $Ficha['departamento']; ?></dd>
        <dt>Municipio:</dt>
        <dd><?php echo $Ficha['municipio']; ?></dd>
        <dd>* Datos al momento del registro</dd>
    </dl><br/>
    <a class="btn btn-app" href="javascript:borrarFicha(<?php echo $identidad; ?>);">
    	<i class="fa fa-bitbucket"></i> Borrar Ficha
    </a>

    <a class="btn btn-app" href="Examen.php?id=<?php echo $identidad; ?>">
    	<i class="fa fa-plus"></i>  Examen Físico
    </a>
    <a class="btn btn-app" href="Evaluacion.php?id=<?php echo $identidad; ?>">
      <i class="fa fa-plus"></i>  Evaluación Médica
    </a>
    <a class="btn btn-app" href="Anamnesis.php?id=<?php echo $identidad; ?>">
      <i class="fa fa-plus"></i>  Anamnesis
    </a>
    <a class="btn btn-app" href="Diagnostico.php?id=<?php echo $identidad; ?>">
      <i class="fa fa-plus"></i>  Diagnostico
    </a>

</div>
</div>
</div>


<!--Aqui comienza el detalle del examen fisico-->

<div class="container">
<div class="col-lg-6">
<div class="panel panel-warning">
<div class="panel-heading">
  <h3><i class="fa fa-folder-open"></i>Ficha de Examen Físico</h3>
</div>
<div class="panel-body">
<dl>
	<?php
    $registro = mysql_query("select * from examen where identidad='".$identidad."' ORDER BY `fecha` DESC");
    $examen = mysql_fetch_array($registro); ?>
<dl>
        <dt>PA:</dt>
        <dd><?php echo $examen['pa']; ?></dd>
        <dt>PA:</dt>
        <dd><?php echo $examen['fr']; ?></dd>
        <dt>Temperatura:</dt>
        <dd><?php echo $examen['temperatura']; ?></dd>
        <dt>Peso:</dt>
        <dd><?php echo $examen['peso']; ?></dd>
        <dt>Talla:</dt>
        <dd><?php echo $examen['talla']; ?></dd>
        <dt>IMC:</dt>
        <dd><?php echo $examen['imc']; ?></dd>
        <dt>Cabeza:</dt>
        <dd><?php echo $examen['cabeza']; ?></dd>
        <dt>Oidos:</dt>
        <dd><?php echo $examen['oidos']; ?></dd>
        <dt>Nariz:</dt>
        <dd><?php echo $examen['nariz']; ?></dd>
        <dt>Faringe:</dt>
        <dd><?php echo $examen['faringe']; ?></dd>
        <dt>Escoliosis:</dt>
        <dd><?php echo $examen['escoliosis']; ?></dd>
        <dt>Dental:</dt>
        <dd><?php echo $examen['dental']; ?></dd>
        <dt>Cuello:</dt>
        <dd><?php echo $examen['coello']; ?></dd>
        <dt>Torax:</dt>
        <dd><?php echo $examen['torax']; ?></dd>
        <dt>Corazon:</dt>
        <dd><?php echo $examen['corazon']; ?></dd>
        <dt>Abdomen:</dt>
        <dd><?php echo $examen['abdomen']; ?></dd>
        <dt>Genitales:</dt>
        <dd><?php echo $examen['genitales']; ?></dd>
        <dt>Extremidades:</dt>
        <dd><?php echo $examen['extremidades']; ?></dd>
        <dt>Piel:</dt>
        <dd><?php echo $examen['piel']; ?></dd>
        <dt>Observaciones:</dt>
        <dd><?php echo $examen['observaciones']; ?></dd>
        <dt>Fecha:</dt>
        <dd><?php echo $examen['fecha']; ?></dd>
    </dl><br/>
</div>
</div>
</div>
    </div>
<!--Aqui finaliza el detalle del examen fisico-->

<!--Aqui comienza el detalle del Anamnesis-->

<div class="container">
<div class="col-lg-6">
<div class="panel panel-warning">
<div class="panel-heading">
  <h3><i class="fa fa-folder-open"></i>Ficha de Anamnesis</h3>
</div>
<div class="panel-body">
<dl>
	<?php
    $registro = mysql_query("select * from anamnesis where identidad='".$identidad."' ORDER BY `fecha` DESC");
    $anamnesis = mysql_fetch_array($registro); ?>
<dl>
        <dt>Apetito:</dt>
        <dd><?php echo $anamnesis['apetito']; ?></dd>
        <dt>Micción:</dt>
        <dd><?php echo $anamnesis['miccion']; ?></dd>
        <dt>Defecación:</dt>
        <dd><?php echo $anamnesis['defecacion']; ?></dd>
        <dt>Sueño:</dt>
        <dd><?php echo $anamnesis['sueno']; ?></dd>
        <dt>Enfermedades Cronicas:</dt>
        <dd><?php echo $anamnesis['enfe_cronicas']; ?></dd>
        <dt>Medicamentos:</dt>
        <dd><?php echo $anamnesis['medicamentos']; ?></dd>
        <dt>Antecedentes Alergicos:</dt>
        <dd><?php echo $anamnesis['ante_alergicos']; ?></dd>
        <dt>Habitos Toxicos:</dt>
        <dd><?php echo $anamnesis['habitos_toxicos']; ?></dd>
        <dt>Antecedentes Hospitalarios:</dt>
        <dd><?php echo $anamnesis['ant_hospitalarios']; ?></dd>
        <dt>Historial de Enfermedades:</dt>
        <dd><?php echo $anamnesis['historial_enfermedades']; ?></dd>
        <dt>Antecedentes Familiares:</dt>
        <dd><?php echo $anamnesis['antecedentes_familiares']; ?></dd>
        <dt>Fecha:</dt>
        <dd><?php echo $anamnesis['fecha']; ?></dd>
    </dl><br/>
</div>
</div>
</div>
    </div>
<!--Aqui finaliza el detalle del Anamnesis-->
    <!--Aqui comienza el detalle del diagnostico-->
    <?php
    $sql = mysql_query("select * from diagnosticos where identidad='".$identidad."' ORDER BY `fecha` DESC");
    $diagnostico = mysql_fetch_array($sql); ?>
<div class="container">
<div class="col-lg-6">
    <div class="panel panel-warning">
<div class="panel-heading"><h3><i class="fa fa-folder-open"></i>Ficha de Diagnostico</h3>
<!-- /.box-tools -->
</div>

<!-- /.box-header -->

<div class="panel-body">
	<dl>
        <dt>Nombre:</dt>
        <dd><?php echo $diagnostico['nombre']; ?></dd>
        <dt>Diagnostico Patológico:</dt>
        <dd><?php echo $diagnostico['patologico']; ?></dd>
        <dt>Diagnostico Nutricional:</dt>
        <dd><?php echo $diagnostico['nutricional']; ?></dd>
        <dt>Diagnostico Socioeconómico:</dt>
        <dd><?php echo $diagnostico['socieconomico']; ?></dd>
        <dt>Diagnostico Inmunológico:</dt>
        <dd><?php echo $diagnostico['inmunologico']; ?></dd>
        <dt>Diagnostico Etario</dt>
        <dd><?php echo $diagnostico['etario']; ?></dd>
        <dt>Fecha:</dt>
        <dd><?php echo $diagnostico['fecha']; ?></dd>
    </dl>
</div>
    <div class="box-footer"></div>
</div>
</div>
</div>
    <!--Aqui finaliza el detalle del diagnostico-->
    <!--Aqui comienza el detalle de la evaluacion medica-->
    <?php
    $sql = mysql_query("select * from evaluaciones where identidad='".$identidad."' ORDER BY `fecha` DESC");
    $evaluacion = mysql_fetch_array($sql); ?>
  <div class="container">
  <div class="col-lg-6">
    <div class="panel panel-warning">
  <div class="panel-heading"><h3><i class="fa fa-folder-open"></i>Ficha de Evaluación Medica</h3>
  <!-- /.box-tools -->
  </div>

  <!-- /.box-header -->

  <div class="panel-body">
  <dl>
        <dt>Nombre:</dt>
        <dd><?php echo $evaluacion['nombre']; ?></dd>

        <dt>Fecha:</dt>
        <dd><?php echo $evaluacion['fecha']; ?></dd>
    </dl>
  </div>
    <div class="box-footer"></div>
  </div>
  </div>
  </div>
    <!--Aqui finaliza el detalle del evaluacion medica-->
<?php
}
mysql_close($conexion);
?>

          <!--AQUI TERMINA EL CODIGO DE DE CONSULTA DE FICHA-->
        </div>
        </section><!-- right col -->
      </div>
      <?php
      include 'inc/footer.inc';
      ?>
      </div><!-- ./wrapper -->

      <div id="agregar-html-borrado"></div>

      <script type="text/javascript">
          function borrarFicha(id){
            debugger;
      		var url = 'php/borrarFicha.php';
      		var pregunta = confirm('¿Esta seguro de eliminar el Examen?');
      		if(pregunta==true){
      			$.ajax({
      			type:'POST',
      			url:url,
      			data:'id='+id,
      			success: function(registro){
      				$('#agregar-html-borrado').html(registro);
      			}
      		});
      		}else{
      			return false;
      		}
      	}
      </script>
<?php
include 'inc/scripts.inc';
?>
<?php
include 'inc/plugins.inc';
include 'inc/fin.inc';
?>
