<?php
require 'conexion.php';
$id = $_POST['id'];

//ELIMINAMOS LA FICHA

mysql_query("DELETE FROM evaluaciones  WHERE id = '$id'");

//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS
mysql_close($conexion);
echo '<script type="text/javascript">alert("Evaluacion borrada");</script>';
echo "<script>window.location = 'consultaEvaluacion.php'</script>";
?>
