<?php
require 'conexion.php';
$buscar = $_POST['id'];

//BUSCA FICHA

$registros = mysql_query("select * from anamnesis where id='".$buscar."'");
$reg = mysql_num_rows($registros);
if ($reg==0) {

}
else{
	 $anamnesis = mysql_fetch_array($registros);
     $consulta = mysql_query("select * from ficha where identidad='".$anamnesis['identidad']."'");
     $ficha = mysql_fetch_array($consulta);
	//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

?>
<div class="panel panel-warning">
<div class="panel-heading">
  <h3><i class="fa fa-folder-open"></i>Ficha de Anamnesis</h3>
</div>
<div class="panel-body">
<dl>
        <dt>Numero de identidad</dt>
        <dd><?php echo $ficha['identidad'];?></dd>
        <dt>Nombre:</dt>
        <dd><?php echo $ficha['nombre'];?></dd>
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
<?php
}
mysql_close($conexion);
?>