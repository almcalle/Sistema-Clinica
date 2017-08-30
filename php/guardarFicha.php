<?php
	$identidad = $_POST["identidad"];
	$nombre = $_POST["nombre"];
	$fecha = $_POST["fecha"];
	$edad = $_POST["edad"];
	$responsable = $_POST["responsable"];
	$grado = $_POST["grado"];
	$seccion = $_POST["seccion"];
	$escuela = $_POST["escuela"];
	$direccion = $_POST["direccion"];
	$municipio = $_POST["municipio"];
	$departamento = $_POST["departamento"];
	$imagen_portada = $_FILES['imagen']['name'];
	$d=mt_rand(1,10000);
if (isset($_POST['identidad']) and isset($_POST['nombre'])) {
if (empty($imagen_portada)) {

			# code...

			$imagen_portada = "avatar.png";

		}

		else{

			#AQUI VA EL CODIGO PARA SUBIR LA IMAGEN

			$destino = ($_SERVER['DOCUMENT_ROOT'].'/img/' );

			$archivo = $_FILES['imagen']['tmp_name'];

			$tamano = $_FILES['imagen']['size'];

			if ($tamano<2000000){

				move_uploaded_file($archivo,$destino.$d.$imagen_portada);

			}

			else{

				echo '<script type="text/javascript">alert("El tamaño de la portada es superior al permitido");</script>';

				$imagen_portada = "avatar.png";

			}

			

		}	

		require "conexion.php";
		$consulta = mysql_query("select identidad from ficha where identidad='".$identidad."'")or die(mysql_error());
		$id = mysql_num_rows($consulta);
		if ($id==0){
			if ($imagen_portada<>"avatar.png"){
				$foto = $d.$imagen_portada;
			}
			else{
				$foto=$imagen_portada;
			}
			mysql_query("insert into ficha(identidad,nombre,fecha_nacimiento,edad,responsable,grado,seccion,escuela,direccion,municipio,departamento,foto) values('".$identidad."','".$nombre."','".$fecha."','".$edad."','".$responsable."','".$grado."','".$seccion."','".$escuela."','".$direccion."','".$municipio."','".$departamento."','".$foto."')") or die(mysql_error());
			echo '<script type="text/javascript">alert("Ficha Guardada");</script>';
			echo "<script>window.location = '../nuevaFicha.php'</script>";
		}
		else {
			echo '<script type="text/javascript">alert("El No. de identidad ya se encuentra registrado");</script>';
			echo "<script>window.location = '../nuevaFicha.php'</script>";
		}
		mysql_close();	
}
?>