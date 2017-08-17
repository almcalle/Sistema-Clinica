<?php
if(isset ($_POST['identidad'])){
    $identidad = $_POST["identidad"];

$hepatitisB = 0;
$poliomielitis = 0;



if(isset ($_POST['hepatitisB'])){
    $hepatitisB = 1;
  }

  if(isset ($_POST['poliomielitis'])){
      $poliomielitis = 1;
    }

    require 'conexion.php';
mysql_query("delete from vacunas where identidad = ".$identidad) or die(mysql_error());

    mysql_query("insert into vacunas(identidad,hepatitisB,poliomielitis) values('".$identidad."','".$hepatitisB."','".$poliomielitis."')") or die(mysql_error());
        echo '<script type="text/javascript">alert("Vacunas Guardadas");</script>';
        echo "<script>window.location = '../consultaVacunas.php'</script>";

    mysql_close($conexion);
}
?>
