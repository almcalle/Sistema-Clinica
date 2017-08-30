<?php
if(isset ($_POST['identidad'])){
    $identidad = $_POST['identidad'];
    $patologico = $_POST['patologico'];
    $nutricional = $_POST['nutricional'];
    $socieconomico = $_POST["socieconomico"];
    $inmunologico = $_POST['inmunologico'];
    $etario = $_POST['etario'];
    require 'conexion.php';
    mysql_query("insert into diagnosticos(identidad,patologico,nutricional,socieconomico,inmunologico,etario,fecha) values('".$identidad."','".$patologico."','".$nutricional."','".$socieconomico."','".$inmunologico."','".$etario."', CURDATE())") or die(mysql_error());
        echo '<script type="text/javascript">alert("Diagnostico Guardado");</script>';
        echo "<script>window.location = '../Diagnostico.php'</script>";
   
    mysql_close($conexion);
}
?>