<?php
        require "php/conexion.php";
        $id=$_SESSION['id_usuario'];
        $buscar_foto = mysql_query("SELECT foto FROM empleados WHERE num_identidad='$id'") or die(mysql_error());
        $fila=mysql_fetch_array($buscar_foto);
        $foto = $fila['foto'];
?>
<center><img src="<?php echo "img/".$foto; ?>" alt="<?php echo "img/".$foto; ?>" id="fotoGrande" /></center>
</br>