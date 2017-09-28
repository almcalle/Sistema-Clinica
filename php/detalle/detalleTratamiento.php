<?php
require '../conexion.php';
$buscar = $_POST['id'];

//BUSCA FICHA

$registros = mysql_query("select * from tratamiento where id='".$buscar."'");
$reg = mysql_num_rows($registros);
if ($reg==0) {

}
else{
	 $tratamientos = mysql_fetch_array($registros);
     $consulta = mysql_query("select * from ficha where identidad='".$tratamientos['identidad']."'");
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
      
        <dt>Tratamiento</dt>
        <dd><?php echo $tratamientos['tratamiento'];?></dd>
        <dt>Fecha:</dt>
        <dd><?php echo $tratamientos['fecha'];?></dd>
    </dl>
</div>
    <div class="box-footer"></div>
</div>
<?php
}
mysql_close($conexion);
?>
