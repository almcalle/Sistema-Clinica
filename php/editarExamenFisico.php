<?php
$idExamen = $_POST['idExamen'];
$identidad = $_POST["identidad"];
$pa = $_POST["pa"];
$fr = $_POST["fr"];
$temperatura = $_POST["t"];
$peso = $_POST["peso"];
$talla = $_POST["talla"];
$imc = $_POST["imc"];
$cabeza = $_POST["cabeza"];
$oidos = $_POST["oidos"];
$faringe = $_POST["faringe"];
$escoliosis = $_POST["escoliosis"];
$dental = $_POST["dental"];

$ojoDerecho = $_POST["od"];
$ojoIzquierdo = $_POST["oi"];
$observacionesVisual= $_POST["observaciones_visual"];

$nariz = $_POST["nariz"];
$cuello = $_POST["coello"];
$torax = $_POST["torax"];
$corazon = $_POST["corazon"];
$abdomen = $_POST["abdomen"];
$genitales = $_POST["genitales"];
$extremidades = $_POST["extremidades"];
$piel = $_POST["piel"];
$observaciones = $_POST["observaciones"];

if (isset($_POST['idExamen'])) {


		require "conexion.php";
		$consulta = mysql_query("select identidad from ficha where identidad='".$identidad."'")or die(mysql_error());
		$id = mysql_num_rows($consulta);

		if ($id==1){

			$sql="UPDATE `examen` SET
      `pa` = '".$pa."',
      `fr` = '".$fr."',
      `temperatura` = '".$temperatura."',
      `peso` = '".$peso."',
      `talla` = '".$talla."',
      `imc` = '".$imc."',
      `cabeza` = '".$cabeza."',
      `ojo_izquierdo` = '".$ojoIzquierdo."',
      `ojo_derecho` = '".$ojoDerecho."',
      `observaciones_visual` = '".$observacionesVisual."',
      `oidos` = '".$oidos."',
      `nariz` = '".$nariz."',
      `coello` = '".$cuello."',
      `torax` = '".$torax."',
      `corazon` = '".$corazon."',
      `abdomen` = '".$abdomen."',
      `genitales` = '".$genitales."',
      `extremidades` = '".$extremidades."',
      `piel` = '".$piel."',
      `faringe` = '".$faringe."',
      `escoliosis` = '".$escoliosis."',
      `dental` = '".$dental."',
			 `observaciones` = '".$observaciones."'
			  WHERE `examen`.`id` = '".$idExamen."'";

			mysql_query($sql);
			echo '<script type="text/javascript">alert("Examen Editado");</script>';
			echo "<script>window.location = '../detalleFicha.php?id=".$identidad."'</script>";
		}
		else {

			mysql_query("insert into ficha(identidad,nombre,fecha_nacimiento,edad,responsable,grado,seccion,escuela,direccion,municipio,departamento,contacto_responsable) values('".$identidad."','".$nombre."','".$fecha."','".$edad."','".$responsable."','".$grado."','".$seccion."','".$escuela."','".$direccion."','".$municipio."','".$departamento."','".$tel_responsable."')") or die(mysql_error());
			// echo '<script type="text/javascript">alert("Ficha Guardada");</script>';
			echo '<script type="text/javascript">alert("El No. de identidad no se encuentra registrado");</script>';
			// echo "<script>window.location = '../detalleFicha.php?id=".$identidad."'</script>";

			 echo "<script>window.location = '../nuevaFicha.php'</script>";
		}
		mysql_close();
}
?>
