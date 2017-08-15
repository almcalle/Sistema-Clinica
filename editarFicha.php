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
        Actualización de la Ficha de salud
        <small></small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li>Ficha de salud escolar</li>
        <li class="active">Consultar</li>
        </ol>
        </section>
        <section class="content"><!--AQUI COMIENZA EL CONTENIDO -->
        <div class="row">
          <div class="col-lg-12">
          <div class="col-lg-4">
							<form action="editarFicha.php" method="post">
							<div class="input-group margin">
			                <input type="text" maxlength="13" id="buscar" class="form-control" placeholder="No. Identidad">
			                    <span class="input-group-btn">
			                      <a class="btn btn-primary btn-flat" href="javascript:buscarFicha()">Buscar</a>
			                    </span>
			            </div>
						</form>
						</div>
          </div>
          <div class="col-lg-6"><!--AQUI SE MUESTRA LA INFORMACION-->
          	<div class="registros" id="agrega-registros"></div>
			<center><ul class="pagination" id="pagination"></ul></center>
          </div>
          <div class="col-lg-6"><!--AQUI SE MUESTRA LA INFORMACION-->
          	<div class="registros" id="agrega-registros2"></div>
			<center><ul class="pagination" id="pagination2"></ul></center>
          </div>
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
	var url = 'php/buscarFicha.php';
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
	function editarFicha(id){
	var url = '/php/editarFicha.php';
	var buscar = document.getElementById('buscar').value;
	if(!id){
		}
		else{
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(registros){
			$('#agrega-registros2').html(registros);
			$('#pagination2').html("");
			return false;
		}
		});
		}
	}
function borrarFicha(id){
		var url = '/php/borrarFicha.php';
		var pregunta = confirm('¿Esta seguro de eliminar esta Ficha?');
		if(pregunta==true){
			$.ajax({
			type:'POST',
			url:url,
			data:'id='+id,
			success: function(registro){
				$('#agrega-registros').html(registro);
			}
		});
		}else{
			return false;
		}
	}
</script>
<?php
include 'inc/plugins.inc';
include 'inc/fin.inc';
?>
