console.log("enlazado");

$('#formulario').click(function (e) {
    e.preventDefault();
    console.log("ha hecho click");
    data = $('#activity_id').val();
    console.log(data);
    $("#session_id").find("option").remove();

    $.get("/bookings/filter?filter=" + data, function (data, status) {
        //console.log("Data: " + data + "\nStatus: " + status);
        console.log(data);
        grabar(data);
        //$('#destino').html(data);
    });

});

$("#reservar").click(function(e){
    e.preventDefault();
    console.log("reserva");
    var variable = $('#session_id').val();
    user=$('#user_id').val();
    console.log(variable);

    $.ajax({
        method:"post",
        url:"/bookings/guardar",
        data: {"store":variable},
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function(data){
        $("body").append("<a href='/bookings'>Volver</a>")
        alert("Texto grabado con exito");
    }).fail(function(){
        alert("Ha existido un error");
    }).always(function(){
        alert("Trabajo realizado");
    });
});

function grabar(data) {
    var select = document.getElementById("session_id");
    for(var i=0;i<data.length;i++){
        select.innerHTML+="<option value='"+data[i].id+"'>"+data[i].date_session+" "+data[i].start_time+"</option>";
    }
}