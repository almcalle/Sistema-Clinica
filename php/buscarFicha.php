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

?>
<div class="box box-primary">
<div class="box-header with-border">
  <h3 class="box-title"><i class="fa fa-folder-open"></i>Ficha de Salud Escolar</h3>
</div>
<div class="box-body">
	<center><img src="<?php echo "img/".$Ficha['foto']; ?>" alt="<?php echo "img/".$registro['foto']; ?>" id="fotoGrande" /></center>
	<br/>
	<dl class="dl-horizontal">
        <dt>Numero de identidad</dt>
        <dd><?php echo $buscar;?></dd>
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
    <a class="btn btn-app" href="javascript:editarFicha(<?php echo $buscar;?>);">
        <i class="fa fa-edit"></i> Editar Ficha
    </a>
    <a class="btn btn-app" href="javascript:borrarFicha(<?php echo $buscar;?>);">
    	<i class="fa fa-bitbucket"></i> Borrar Ficha
    </a>
</div>
</div>
<?php
}
mysql_close($conexion);
?>