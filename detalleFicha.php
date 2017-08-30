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
require '/php/conexion.php';
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
}
else{
	 $Ficha = mysql_fetch_array($registro);
	//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

?>
            
<div class="col-lg-6">
<div class="box box-warning">
<div class="box-header with-border">
  <h3 class="box-title"><i class="fa fa-folder-open"></i>Ficha de Salud Escolar</h3>
</div>
<div class="box-body">
	<center><img src="<?php echo "img/".$Ficha['foto']; ?>" alt="<?php echo "img/".$registro['foto']; ?>" id="fotoGrande" /></center>
	<br/>
	<dl class="dl-horizontal">
        <dt>Numero de identidad</dt>
        <dd><?php echo $identidad;?></dd>
        <dt>Nombre:</dt>
        <dd><?php echo $Ficha['nombre'];?></dd>
        <dt>Fecha de Nacimiento:</dt>
        <dd><?php echo $Ficha['fecha_nacimiento'];?></dd>
        <dt>* Edad:</dt>
        <dd><?php echo $Ficha['edad']." A&ntilde;os";?></dd>
        <dt>Responsable:</dt>
        <dd><?php echo $Ficha['responsable'];?></dd>
        <dt>* Grado:</dt>
        <dd><?php echo $Ficha['grado'];?></dd>
        <dt>* Secci&oacute;n:</dt>
        <dd><?php echo $Ficha['seccion'];?></dd>
        <dt>Escuela:</dt>
        <dd><?php echo $Ficha['escuela'];?></dd>
        <dt>Direcci&oacute;n:</dt>
        <dd><?php echo $Ficha['direccion'];?></dd>
        <dt>Departamento:</dt>
        <dd><?php echo $Ficha['departamento'];?></dd>
        <dt>Municipio:</dt>
        <dd><?php echo $Ficha['municipio'];?></dd>
        <dd>* Datos al momento del registro</dd>
    </dl><br/>
    <a class="btn btn-app" href="javascript:borrarFicha(<?php echo $buscar;?>);">
    	<i class="fa fa-bitbucket"></i> Borrar Ficha
    </a>
</div>
</div>
</div>
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
	$registro = mysql_query("select * from anamnesis where identidad='".$identidad."'");
	$anamnesis = mysql_fetch_array($registro);
	?>
<dl>
        <dt>Apetito:</dt>
        <dd><?php echo $anamnesis['apetito'];?></dd>
        <dt>Micción:</dt>
        <dd><?php echo $anamnesis['miccion'];?></dd>
        <dt>Defecación:</dt>
        <dd><?php echo $anamnesis['defecacion'];?></dd>
        <dt>Sueño:</dt>
        <dd><?php echo $anamnesis['sueno'];?></dd>
        <dt>Enfermedades Cronicas:</dt>
        <dd><?php echo $anamnesis['enfe_cronicas'];?></dd>
        <dt>Medicamentos:</dt>
        <dd><?php echo $anamnesis['medicamentos'];?></dd>
        <dt>Antecedentes Alergicos:</dt>
        <dd><?php echo $anamnesis['ante_alergicos'];?></dd>
        <dt>Habitos Toxicos:</dt>
        <dd><?php echo $anamnesis['habitos_toxicos'];?></dd>
        <dt>Antecedentes Hospitalarios:</dt>
        <dd><?php echo $anamnesis['ant_hospitalarios'];?></dd>
        <dt>Historial de Enfermedades:</dt>
        <dd><?php echo $anamnesis['historial_enfermedades'];?></dd>
        <dt>Antecedentes Familiares:</dt>
        <dd><?php echo $anamnesis['antecedentes_familiares'];?></dd>
        <dt>Fecha:</dt>
        <dd><?php echo $anamnesis['fecha'];?></dd>
    </dl><br/>
</div>
</div>	
</div>
    </div>
<!--Aqui finaliza el detalle del Anamnesis-->
    <!--Aqui comienza el detalle del diagnostico-->
    <?php
    $sql = mysql_query("select * from diagnosticos where identidad='".$identidad."'");
    $diagnostico = mysql_fetch_array($sql);
    ?>
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
        <dd><?php echo $diagnostico['nombre'];?></dd>
        <dt>Diagnostico Patológico:</dt>
        <dd><?php echo $diagnostico['patologico'];?></dd>
        <dt>Diagnostico Nutricional:</dt>
        <dd><?php echo $diagnostico['nutricional'];?></dd>
        <dt>Diagnostico Socioeconómico:</dt>
        <dd><?php echo $diagnostico['socieconomico'];?></dd>
        <dt>Diagnostico Inmunológico:</dt>
        <dd><?php echo $diagnostico['inmunologico'];?></dd>
        <dt>Diagnostico Etario</dt>
        <dd><?php echo $diagnostico['etario'];?></dd>
        <dt>Fecha:</dt>
        <dd><?php echo $diagnostico['fecha'];?></dd>
    </dl>
</div>
    <div class="box-footer"></div>
</div>    
</div>    
</div>
    <!--Aqui finaliza el detalle del diagnostico-->
    <!--Aqui comienza el detalle de las evaluaciones-->
            
    <!--Aqui termina del detalle de las evaluaciones-->
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
<script type="text/javascript">
    function borrarFicha(id){
		var url = '/php/borrarFicha.php';
		var pregunta = confirm('¿Esta seguro de eliminar esta Ficha?');
		if(pregunta==true){
			$.ajax({
			type:'POST',
			url:url,
			data:'id='+id,
			success: function(registro){
				$('#agrega-registros').html(registro);
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