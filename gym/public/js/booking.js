console.log("enlazado");

$('#formulario').click(function (e) {
    e.preventDefault();
    console.log("ha hecho click");
    data = $('#activity_id').val();
    console.log(data);
    $("tr").remove();

    $.get("/bookings/filter?filter=" + data, function (data, status) {
        //console.log("Data: " + data + "\nStatus: " + status);
        console.log(data);
        grabar(data);
        //$('#destino').html(data);
    });
})

function grabar(data) {
    var tabla = document.getElementById("tabla");
    for(var i=0;i<data.length;i++){
        var tr = document.createElement("tr");
        tr.innerHTML="<td> <a>"+data[i].date_session+"</a></td> <td>"+data[i].start_time+"</td><td><input type='hidden' value="+data[i].id+"><input type='submit' value='Reservar'></td>";
        tabla.appendChild(tr);
    }
}