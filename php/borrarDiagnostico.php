<?php
require 'conexion.php';
$id = $_POST['id'];

//ELIMINAMOS LA FICHA

mysql_query("DELETE FROM diagnosticos  WHERE id = '$id'");

//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS
mysql_close($conexion);
echo '<script type="text/javascript">alert("Diagnostico borrado");</script>';
echo "<script>window.location = 'consultaDiagnostico.php'</script>";
?>
