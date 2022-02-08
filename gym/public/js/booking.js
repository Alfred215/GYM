console.log("enlazado");

$('#formulario').click(function (e) {
    e.preventDefault();
    console.log("ha hecho click");
    data = $('#activity_id').val();
    console.log(data);

    $.get("/bookings/filter?filter=" + data, function (data, status) {
        //console.log("Data: " + data + "\nStatus: " + status);
        console.log(data.id);
        grabar(data);
        //$('#destino').html(data);
    });
})

function grabar(data) {
        var objeto=JSON.parse(date);
        alert(objeto);
}