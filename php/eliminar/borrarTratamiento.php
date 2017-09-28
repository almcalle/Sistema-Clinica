<?php
require '../conexion.php';
$id = $_POST['id'];

//ELIMINAMOS LA FICHA

mysql_query("DELETE FROM tratamiento  WHERE id = '$id'");

//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS
mysql_close($conexion);
echo '<script type="text/javascript">alert("Tratamiento borrado");</script>';
echo "<script>window.location = 'consultaTratamiento.php'</script>";
?>
