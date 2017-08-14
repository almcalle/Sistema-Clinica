<?php
if(isset ($_POST['identidad'])){
    $identidad = $_POST["identidad"];
    $apetito = $_POST["apetito"];
    $miccion = $_POST["miccion"];
    $defecacion = $_POST["defecacion"];
    $sueno = $_POST["sueno"];
    $enfe_cronicas = $_POST["enfe_cronicas"];
    $medicamentos = $_POST["medicamentos"];
    $ante_alergicos = $_POST["ante_alergicos"];
    $habitos_toxicos = $_POST["habitos_toxicos"];
    $ant_hospitalarios = $_POST["ant_hospitalarios"];
    $historial_enfermedades = $_POST["historial_enfermedades"];
    $antecedentes_familiares = $_POST["antecedentes_familiares"];

    require 'conexion.php';
    mysql_query("insert into anamnesis(identidad,apetito,miccion,defecacion,sueno,enfe_cronicas,medicamentos,ante_alergicos,habitos_toxicos,ant_hospitalarios,historial_enfermedades,antecedentes_familiares,fecha) values('".$identidad."','".$apetito."','".$miccion."','".$defecacion."','".$sueno."','".$enfe_cronicas."','".$medicamentos."','".$ante_alergicos."','".$habitos_toxicos."','".$ant_hospitalarios."','".$historial_enfermedades."','".$antecedentes_familiares."',CURDATE())") or die(mysql_error());
        echo '<script type="text/javascript">alert("Anamnesis Guardado");</script>';
        echo "<script>window.location = '../Anamnesis.php'</script>";
   
    mysql_close($conexion);
}
?>