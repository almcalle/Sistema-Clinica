<?php
if(isset ($_POST['identidad'])){
    $identidad = $_POST['identidad'];
    $tratamiento = $_POST['tratamiento'];

    require '../conexion.php';
    mysql_query("insert into tratamiento(identidad,tratamiento,fecha)
    values('".$identidad."','".$tratamiento."', CURDATE())") or die(mysql_error());
        echo '<script type="text/javascript">alert("Tratamiento Guardado");</script>';
        echo "<script>window.location = '../../detalleFicha.php?id=".$identidad."'</script>";

    mysql_close($conexion);
}
?>
