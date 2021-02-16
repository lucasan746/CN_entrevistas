
$('body').on('click', '[data-toggle="modal"]', function() {
    $("#nombre_gerencia_edit" ).val($(this).data("gerencia"));
    $("#id_gerencia_edit" ).val($(this).data("id"));
});

$('.switch > input').on('change',function() {
    if (!$(this).is(':checked')) {
        estado = 0;
    } else {
        estado = 1;
    }

    var id = $(this).data("id");
    var token = $('meta[name="csrf-token"]').attr('content');
    var data={estado:estado,id:id,_token:token};
    
    $.ajax({
        type: "post",
        url: "edit-estado-gerencia",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: data,
        success: function (msg) {
                alert("Se ha realizado el cambio con exito");
        },
        error: function(err) { 
            alert("Hubo un error al realizar el cambio");
        }
    });
});