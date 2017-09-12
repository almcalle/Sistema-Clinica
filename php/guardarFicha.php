<?php
	$identidad = $_POST["identidad"];
	$nombre = $_POST["nombre"];
	$fecha = $_POST["fecha"];
	$edad = $_POST["edad"];
	$responsable = $_POST["responsable"];
	$tel_responsable = $_POST["contacto_responsable"];
	$grado = $_POST["grado"];
	$seccion = $_POST["seccion"];
	$escuela = $_POST["escuela"];
	$direccion = $_POST["direccion"];
	$municipio = $_POST["municipio"];
	$departamento = $_POST["departamento"];
	// $imagen_portada = $_FILES['imagen']['name'];
	$d=mt_rand(1,10000);
if (isset($_POST['identidad']) and isset($_POST['nombre'])) {


		require "conexion.php";
		$consulta = mysql_query("select identidad from ficha where identidad='".$identidad."'")or die(mysql_error());
		$id = mysql_num_rows($consulta);
		if ($id==0){

			mysql_query("insert into ficha(identidad,nombre,fecha_nacimiento,edad,responsable,grado,seccion,escuela,direccion,municipio,departamento,contacto_responsable) values('".$identidad."','".$nombre."','".$fecha."','".$edad."','".$responsable."','".$grado."','".$seccion."','".$escuela."','".$direccion."','".$municipio."','".$departamento."','".$tel_responsable."')") or die(mysql_error());
			echo '<script type="text/javascript">alert("Ficha Guardada");</script>';
			echo "<script>window.location = '../detalleFicha.php?id=".$identidad."'</script>";
		}
		else {
			echo '<script type="text/javascript">alert("El No. de identidad ya se encuentra registrado");</script>';
			echo "<script>window.location = '../nuevaFicha.php'</script>";
		}
		mysql_close();
}
?>
