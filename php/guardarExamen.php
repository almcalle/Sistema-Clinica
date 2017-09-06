<?php
if(isset ($_POST['identidad'])){
    $identidad = $_POST["identidad"];
    $pa = $_POST["pa"];
    $fr = $_POST["fr"];
    $temperatura = $_POST["t"];
    $peso = $_POST["peso"];
    $talla = $_POST["talla"];
    $imc = $_POST["imc"];
    $cabeza = $_POST["cabeza"];
    $oidos = $_POST["oidos"];
    $faringe = $_POST["faringe"];
    $escoliosis = $_POST["escoliosis"];
    $dental = $_POST["dental"];

    $oidoDerecho = $_POST["od"];
    $oidoIzquierdo = $_POST["oi"];

    $nariz = $_POST["nariz"];
    $coello = $_POST["coello"];
    $torax = $_POST["torax"];
    $corazon = $_POST["corazon"];
    $abdomen = $_POST["abdomen"];
    $genitales = $_POST["genitales"];
    $extremidades = $_POST["extremidades"];
    $piel = $_POST["piel"];
    $observaciones = $_POST["observaciones"];
    require 'conexion.php';
    mysql_query("insert into examen(identidad,pa,fr,temperatura,peso,talla,imc,cabeza,oidos,nariz,faringe,escoliosis,dental,coello,
    torax,corazon,abdomen,genitales,extremidades,piel,observaciones,ojo_derecho,ojo_izquierdo,fecha)
    values('".$identidad."','".$pa."','".$fr."','".$temperatura."','".$peso."','".$talla."','".$imc."',
    '".$cabeza."','".$oidos."','".$nariz."','".$faringe."','".$escoliosis."','".$dental."','".$coello."','".$torax."','".$corazon."','".$abdomen."','".$genitales."','".$extremidades."','".$piel."','".$observaciones."','".$ojoDerecho."','".$ojoIzquierdo."',CURDATE())") or die(mysql_error());
        echo '<script type="text/javascript">alert("Examen Guardado");</script>';
        echo "<script>window.location = '../detalleFicha.php?id=".$identidad."'</script>";

    mysql_close($conexion);
}
?>
