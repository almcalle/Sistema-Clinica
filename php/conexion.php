<?php
#$conexion = mysql_connect("localhost","root","");
$conexion = mysql_connect("localhost","root","");

mysql_select_db("clinica",$conexion) or die (header("Location: ../error505.php"));
?>
