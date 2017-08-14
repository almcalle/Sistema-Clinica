<?php
require 'php/requerirUsuario.php';
include 'inc/inicio.inc';
?>    
      <div class="wrapper">
      <?php
      include 'inc/menu.inc';
      ?>
      <div class="content-wrapper">
        <section class="content-header">
        <h1>
        Ficha de Anamnesis
        <small></small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Ficha de Anamnesis</li>
        <li class="active">Nueva Ficha</li>
        </ol>
        </section>
        <section class="content"><!--AQUI COMIENZA EL CONTENIDO -->
        <?php 
        include'inc/buscar.inc';
        ?>
        </section><!-- right col -->
        </div>
      <?php
      include 'inc/footer.inc';
      ?>
      </div><!-- ./wrapper -->
     
<?php
include 'inc/scripts.inc';
?>
<script>

  function limpiar() {
    document.getElementById("miform").reset();
  }

	function buscarFicha(){
	var url = 'php/nuevoAnamnesis.php';
	var buscar = document.getElementById('buscar').value;
	if(!buscar){
		
		}
		else{
		$.ajax({
		type:'POST',
		url:url,
		data:'buscar='+buscar,
		success: function(registros){
			$('#agrega-registros').html(registros);
			$('#pagination').html("");
			return false;
		}
		});
		}
	}
  </script>
<?php
include 'inc/plugins.inc';
include 'inc/fin.inc';
?>