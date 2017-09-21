<?php
require 'conexion.php';
$buscar = $_POST['id'];

//BUSCA FICHA

$registros = mysql_query("select * from examen where id='".$buscar."'");
$reg = mysql_num_rows($registros);
if ($reg==0) {

}
else{
	 $examen = mysql_fetch_array($registros);
     $consulta = mysql_query("select * from ficha where identidad='".$examen['identidad']."'");
     $ficha = mysql_fetch_array($consulta);
	//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

?>
<div class="row">
<div class="panel panel-warning">
<div class="panel-heading">
  <h3><i class="fa fa-folder-open"></i>Ficha de Examen Fisico</h3>
</div>
<div class="panel-body">
<dl >
        <dt>Numero de identidad</dt>
        <dd><?php echo $ficha['identidad'];?></dd>
        <dt>Nombre:</dt>
        <dd><?php echo $ficha['nombre'];?></dd>
				<dt>PA:</dt>
        <dd><?php echo $examen['pa']; ?></dd>
        <dt>FR:</dt>
        <dd><?php echo $examen['fr']; ?></dd>
        <dt>Temperatura (ºC):</dt>
        <dd><?php echo $examen['temperatura']; ?></dd>
        <dt>Peso:</dt>
        <dd><?php echo $examen['peso']; ?></dd>
        <dt>Talla:</dt>
        <dd><?php echo $examen['talla']; ?></dd>
        <dt>IMC:</dt>
        <dd><?php echo $examen['imc']; ?></dd>
        <dt>Ojo Derecho:</dt>
        <dd><?php echo $examen['ojo_derecho']; ?></dd>
        <dt>Ojo Izquierdo:</dt>
        <dd><?php echo $examen['ojo_izquierdo']; ?></dd>
				<dt>Observaciones Visual:</dt>
        <dd><?php echo $examen['observaciones_visual']; ?></dd>
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
<?php
}
mysql_close($conexion);
?>
