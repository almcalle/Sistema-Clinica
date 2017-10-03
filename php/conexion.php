<?php
#$conexion = mysql_connect("localhost","root","");
$user = 'root';
$password = 'root';
$db = 'clinica';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);
$conn = mysqli_connect($host,$user,$password,$db);

?>
