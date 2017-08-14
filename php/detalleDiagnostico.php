<?php
require 'conexion.php';
$buscar = $_POST['id'];

//BUSCA FICHA

$registros = mysql_query("select * from diagnosticos where id='".$buscar."'");
$reg = mysql_num_rows($registros);
if ($reg==0) {

}
else{
	 $diagnosticos = mysql_fetch_array($registros);
     $consulta = mysql_query("select * from ficha where identidad='".$diagnosticos['identidad']."'");
     $ficha = mysql_fetch_array($consulta);
	//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

?>
<div class="panel panel-warning">
<div class="panel-heading"><h3><i class="fa fa-folder-open"></i>Ficha de Diagnostico</h3>          
<!-- /.box-tools -->            
</div>
            
<!-- /.box-header -->
 
<div class="panel-body">
	<dl>
        <dt>Numero de identidad</dt>
        <dd><?php echo $ficha['identidad'];?></dd>
        <dt>Nombre:</dt>
        <dd><?php echo $ficha['nombre'];?></dd>
        <dt>Diagnostico Patológico:</dt>
        <dd><?php echo $diagnosticos['patologico'];?></dd>
        <dt>Diagnostico Nutricional:</dt>
        <dd><?php echo $diagnosticos['nutricional'];?></dd>
        <dt>Diagnostico Socioeconómico:</dt>
        <dd><?php echo $diagnosticos['socieconomico'];?></dd>
        <dt>Diagnostico Inmunológico:</dt>
        <dd><?php echo $diagnosticos['inmunologico'];?></dd>
        <dt>Diagnostico Etario</dt>
        <dd><?php echo $diagnosticos['etario'];?></dd>
        <dt>Fecha:</dt>
        <dd><?php echo $diagnosticos['fecha'];?></dd>
    </dl>
</div>
    <div class="box-footer"></div>
</div>
<?php
}
mysql_close($conexion);
?>