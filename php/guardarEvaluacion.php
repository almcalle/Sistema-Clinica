<?php
if(isset ($_POST['identidad'])){
    $identidad = $_POST["identidad"];
    $oi = $_POST["oi"];
    $od = $_POST["od"];
    $estrabismo = $_POST["estrabismo"];
    $perdida_auditiva = $_POST["pa"];
    $transtorno_fonacion = $_POST["tf"];
    $pediculosis = $_POST["pediculosis"];
    $sarna = $_POST["sarna"];
    $anemia = $_POST["sa"];
    $violencia = $_POST["sv"];
    $problemas_personalidad = $_POST["pp"];
    $problemas_aprendizaje = $_POST["aprendizaje"];
    $uso_drogas = $_POST["ud"];
    require 'conexion.php';
    mysql_query("insert into evaluaciones(identidad,ojo_izquierdo,ojo_derecho,estrabismo,perdida_auditiva,transtorno_fonacion,pediculosis,sarna,anemia,violencia,problemas_personalidad,problemas_aprendizaje,uso_drogas,fecha) values('".$identidad."','".$oi."','".$od."','".$estrabismo."','".$perdida_auditiva."','".$transtorno_fonacion."','".$pediculosis."','".$sarna."','".$anemia."','".$violencia."','".$problemas_personalidad."','".$problemas_aprendizaje."','".$uso_drogas."', CURDATE())") or die(mysql_error());
        echo '<script type="text/javascript">alert("Diagnostico Guardado");</script>';
        echo "<script>window.location = '../Evaluacion.php'</script>";
   
    mysql_close($conexion);
}
?>