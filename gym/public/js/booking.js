console.log("enlazado");

$('#formulario').click(function (e) {
    e.preventDefault();
    console.log("ha hecho click");
    data = $('#filtro').val();
    console.log(data);

    $.get("/activities/filter?filter=" + data, function (data, status) {
        //console.log("Data: " + data + "\nStatus: " + status);
        //console.log(data);
        //grabar(data);
        $('#destinoFiltro').html(data);
    });
})

function grabar(dataJ) {
    //recorrer el dataJ y grabaer en una tabla
}