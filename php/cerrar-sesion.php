<?php
 session_start();
 $_SESSION = array();
 session_destroy();
echo '<script type="text/javascript">alert("Adios");</script>';
echo "<script>window.location = '../index.php'</script>";
?>