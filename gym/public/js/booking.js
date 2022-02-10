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
    variable = $('#session_id').val();
    user=$('#user_id').val();
    console.log(user);
    // $.get("/bookings/store?store="+variable,function(data,status){
    //     console.log(data);
    // });
    $.ajax({
        url:"bookings",

        // headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},

        data:{
            "store" : variable
            },

        type:'POST',

        // dataType:'text',

        success: function(data){
            console.log("Hola"+data);
        },

        error: function(xhr,status){
            console.log("Error");
        }
    });
});

function grabar(data) {
    var select = document.getElementById("session_id");
    for(var i=0;i<data.length;i++){
        select.innerHTML+="<option value='"+data[i].id+"'>"+data[i].date_session+" "+data[i].start_time+"</option>";
        //tr.innerHTML="<td> <a>"+data[i].date_session+"</a></td> <td>"+data[i].start_time+"</td><td><input type='hidden' id='session_id' value="+data[i].id+"><input type='button' id='reservar' value='Reservar'></td>";
        //tabla.appendChild(tr);
    }
}