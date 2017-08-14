$(document).ready(pagination(1));
function guardarOficina(){
    var url='php/guardarOficina.php';
    var id= document.getElementById("id").value
    $.ajax({
            type:'POST',
            url:url,
            data:$('#frmOficina').serialize(),
            success:function(registro){
            $('#agrega-registros').html(registro);
            document.getElementById("mensaje2").innerText= "Oficina Guardada";
            $('#modal2').modal('show');
            $('#frmOficina')[0].reset();
            document.getElementById("id").value = "--";
            return false;
            }
            });
    return false;
}
function detalleOficina(id){
    var url='php/detalleOficina.php';
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
function pagination(partida){
    var url='php/paginarOficinas.php';
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
    return false;
}
function BorrarOficina(id){
    var url = 'php/BorrarOficina.php';
    var pregunta = confirm('¿Esta seguro de eliminar esta Oficina?');
    if(pregunta==true){
        $.ajax({
        type:'POST',
        url:url,
        data:'id='+id,
        success: function(registro){
            $('#agrega-registros').html(registro);
            $('#frmOficina')[0].reset();
            document.getElementById("id").value = "--";
            document.getElementById("mensaje2").innerText="Oficina Borrada";
            $('#modal2').modal('show');
            return false;
        }
       });
        return false;
        }else{
            return false;
        }
}
function Limpiar(){
    $('#frmOficina')[0].reset();
    document.getElementById("id").value = "--";
}
function editarOficina(id){
    $('#frmOficina')[0].reset();
    var url = 'php/editarOficina.php';
        $.ajax({
        type:'POST',
        url:url,
        data:'id='+id,
        success: function(valores){
                var datos = eval(valores);
                $('#id').val(datos[0]);
                $('#desc').val(datos[1]);
                $('#pais').val(datos[2]);
                $('#dir').val(datos[3]);
                $('#telefono1').val(datos[4]);
                $('#telefono2').val(datos[5]);
                $('#telefono3').val(datos[6]);
                $('#telefono4').val(datos[7]);
                $('#fax').val(datos[8]);
            return false;
        }
    });
    }
