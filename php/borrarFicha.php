<?php
require 'conexion.php';
$id = $_POST['id'];

//ELIMINAMOS LA FICHA

mysql_query("DELETE FROM ficha  WHERE identidad = '$id'");

//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS
mysql_close($conexion);
echo '<script type="text/javascript">alert("Ficha borrada");</script>';
echo "<script>window.location = 'consultaFicha.php'</script>";
?>
