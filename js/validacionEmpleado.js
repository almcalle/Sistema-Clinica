$(document).ready(function(){
    document.getElementById('comboPais').selectedIndex=-1;
    document.getElementById('comboEstado').selectedIndex=-1;
    document.getElementById('comboPuesto').selectedIndex=-1;
    $("#fecha1").datepicker({
        defaultDate: new Date(),
        format: 'dd-mm-yyyy',
        daysOfWeekDisabled: [0,6],
         endDate: '+0d',
        })
});
function limpiarCombo(combo){
    while(combo.length>0){
        combo.remove(combo.length-1);
    }
}

function seleccionadoCombo(combo1){
        var pais = combo1.options[combo1.selectedIndex].value;
        url='php/comboOficina.php';
        $.ajax({
            type:'POST',
            url:url,
            data:'pais='+pais,
         success:function(data){
            $('#oficinas').html(data);
            return false;
            }
        });
    }
