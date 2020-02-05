function seleccionar_deporte(valor){
    var url = 'getdeporte.php';
    $.ajax({
        type: 'POST',
        url: url,
        data: {valor},
        success:function(data){
            console.log("deporte seleccionado " + data);
        }
    });
}