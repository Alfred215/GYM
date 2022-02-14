console.log("enlazado");

$('#busqueda').click(function (e) {
    e.preventDefault();
    console.log("ha hecho click");
    data = $('#fecha').val();
    console.log(data);

    $.get("/bookings/filter2?filter2=" + data, function (data, status) {
        //console.log("Data: " + data + "\nStatus: " + status);
        console.log(data);
        grabar2(data);
        //$('#destino').html(data);
    });

});

function grabar2(data) {
    var select = document.getElementById("activity_id");
    for(var i=0;i<data.length;i++){
        select.innerHTML+="<option value='"+data[i].id+"'>"+data[i].start_time+"</option>";
    }
}