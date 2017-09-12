<?php
require 'conexion.php';
$buscar = $_POST['id'];

//BUSCA FICHA

$registros = mysql_query("select * from evaluaciones where id='".$buscar."'");
$reg = mysql_num_rows($registros);
if ($reg==0) {

}
else{
	 $Evaluacion = mysql_fetch_array($registros);
     $consulta = mysql_query("select * from ficha where identidad='".$Evaluacion['identidad']."'");
     $ficha = mysql_fetch_array($consulta);
	//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

?>
	<div class="panel panel-warning">
		<div class="panel-heading">
		  <h3 class="box-title"><i class="fa fa-folder-open"></i>Ficha de Salud Escolar</h3>
		</div>
			<div class="panel-body">
				<dl>
					   <dt>Numero de identidad</dt>
					   <dd><?php echo $ficha['identidad'];?></dd>
					   <dt>Nombre:</dt>
					   <dd><?php echo $ficha['nombre'];?></dd>
					   <!-- <dt>Ojo Izquierdo:</dt>
					   <dd><?php echo $Evaluacion['ojo_izquierdo'];?></dd>
					   <dt>Ojo Derecho:</dt>
					   <dd><?php echo $Evaluacion['ojo_derecho'];?></dd> -->
					   <dt>Estrabismo:</dt>
					   <dd><?php echo $Evaluacion['estrabismo'];?></dd>
					   <dt>Perdida Auditiva:</dt>
					   <dd><?php echo $Evaluacion['perdida_auditiva'];?></dd>
					   <dt>Transtorno de Fonacion</dt>
					   <dd><?php echo $Evaluacion['transtorno_fonacion'];?></dd>
					   <dt>Pediculosis:</dt>
					   <dd><?php echo $Evaluacion['pediculosis'];?></dd>
					   <dt>Sarna</dt>
					   <dd><?php echo $Evaluacion['sarna'];?></dd>
					   <dt>Anemia:</dt>
					   <dd><?php echo $Evaluacion['anemia'];?></dd>
					   <dt>Violencia:</dt>
					   <dd><?php echo $Evaluacion['violencia'];?></dd>
					   <dt>Problemas de Aprendizaje:</dt>
					   <dd><?php echo $Evaluacion['problemas_aprendizaje'];?></dd>
					   <dt>Uso de Drogas:</dt>
					   <dd><?php echo $Evaluacion['uso_drogas'];?></dd>
					   <dt>Fecha:</dt>
					   <dd><?php echo $Evaluacion['fecha'];?></dd>
				 </dl><br/>
			</div>
	</div>
<?php
}
mysql_close($conexion);
?>
