
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
	// $d=mt_rand(1,10000);
if (isset($_POST['identidad']) and isset($_POST['nombre'])) {


		require "conexion.php";
		$consulta = mysql_query("select identidad from ficha where identidad='".$identidad."'")or die(mysql_error());
		$id = mysql_num_rows($consulta);

		if ($id==1){

			$sql="UPDATE `ficha` SET `nombre` = '".$nombre."',
			 `fecha_nacimiento` = '".$fecha."',
			 `edad` = '".$edad."',
			 `responsable` = '".$responsable."',
			 `contacto_responsable` = '".$tel_responsable."',
			 `grado` = '".$grado."',
			 `seccion` = '".$seccion."',
			 `escuela` = '".$escuela."',
			 `direccion` = '".$direccion."',
			 `municipio` = '".$municipio."',
			 `departamento` = '".$departamento."'
			  WHERE `ficha`.`identidad` = '".$identidad."'";

			mysql_query($sql);
			echo '<script type="text/javascript">alert("Ficha Editada");</script>';
			echo "<script>window.location = '../detalleFicha.php?id=".$identidad."'</script>";
		}
		else {

			mysql_query("insert into ficha(identidad,nombre,fecha_nacimiento,edad,responsable,grado,seccion,escuela,direccion,municipio,departamento,contacto_responsable) values('".$identidad."','".$nombre."','".$fecha."','".$edad."','".$responsable."','".$grado."','".$seccion."','".$escuela."','".$direccion."','".$municipio."','".$departamento."','".$tel_responsable."')") or die(mysql_error());
			// echo '<script type="text/javascript">alert("Ficha Guardada");</script>';
			echo '<script type="text/javascript">alert("El No. de identidad no se encuentra registrado, se guarda una nueva ficha");</script>';
			echo "<script>window.location = '../detalleFicha.php?id=".$identidad."'</script>";

			// echo "<script>window.location = '../nuevaFicha.php'</script>";
		}
		mysql_close();
}
?>
