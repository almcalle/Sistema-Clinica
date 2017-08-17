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
        Nuevo Registro de Vacunas
        <small></small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Ficha de Vacunas</li>
        <li class="active">Nuevo Registro de Vacunas</li>
        </ol>
        </section>
        <section class="content"><!--AQUI COMIENZA EL CONTENIDO -->
            <div class="row">
               <?php
                include'inc/buscar.inc';
                ?>
            </div>

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
	function buscarFicha(){
  var url = 'php/nuevaVacuna.php';
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
  function limpiar() {
    document.getElementById("miForm").reset();
  }
</script>
<?php
include 'inc/plugins.inc';
include 'inc/fin.inc';
?>
