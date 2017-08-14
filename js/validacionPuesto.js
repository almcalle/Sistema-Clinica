$(document).ready(function(){
	 pagination(1);
    document.getElementById('combo_buscar').selectedIndex=-1;
    document.getElementById('combo_pais').selectedIndex=-1;
    document.getElementById('combo_proyecto').selectedIndex=-1;
});
function pagination(partida){
    var url = 'php/paginarPuestos.php';
    $.ajax({
    type:'POST',
    url:url,
    data:'partida='+partida,
    success:function(data){
    var array = eval(data);
    $('#agrega-registros').html(array[0]);
    $('#pagination').html(array[1]);
    }
    });
}
function buscarPuesto(){
	var url = 'php/buscarPuesto.php';
	var buscar = document.getElementById('combo_buscar').value;
	if(!buscar){
		pagination(1);
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
function detallePuesto(id){
    var url='php/detallePuesto.php';
    $.ajax({
        type:'POST',
        url:url,
        data:'id='+id,
        success:function(data){
            $('#detalle').html(data);
            $('#modal-detalle').modal('show');
            return false;
        }
    });
}
	function editarPuesto(id){
	$('#frmPuesto')[0].reset();
	var url = 'php/editarPuesto.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'id='+id,
		success: function(valores){
				var datos = eval(valores);
				$('#id').val(datos[0]);
				$('#puesto').val(datos[1]);
				$('#combo_pais').val(datos[2]);
				$('#combo_proyecto').val(datos[3]);
				$('#telefono').val(datos[4]);
				$('#correo').val(datos[5]);
			return false;
		}
	});
}
	function BajaPuesto(id){
		$('#frmPuesto')[0].reset();
		var url = 'php/borrarPuesto.php';
		var pregunta = confirm('¿Esta seguro de dar de baja este Proyecto?');
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
function Limpiar(){
    $('#frmPuesto')[0].reset();
    document.getElementById("id").value = "--";
    document.getElementById('combo_pais').selectedIndex=-1;
    document.getElementById('combo_proyecto').selectedIndex=-1;
}