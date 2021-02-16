$("#dni_prospecto").on("input",function (e) { 
    if(this.value >= 10000000){
        fetch("https://ws01.nosis.com/rest/variables?documento="+this.value+"&format=json&Usuario=62647&Token=295420&VR=1")
        .then(response => response.json())
        .then(json => json.Contenido.Datos.Variables.forEach(o => {
            if(o.Nombre == "VI_Nombre"){
                $("#nombre_prospecto").val(o.Valor);
            }
            if(o.Nombre == "VI_Apellido"){
                $("#apellido_prospecto").val(o.Valor);
            }
            if(o.Nombre == "VI_FecNacimiento"){
                $("#nacimiento_prospecto").val(o.Valor);
            }
            if(o.Nombre == "VI_Edad"){
                $("#edad_prospecto").val(o.Valor);
            }
            if(o.Nombre == "VI_DomAF_Loc"){
                if(o.Valor != 0){
                    $("#localidad_prospecto").val(o.Valor);
                }
            }
            if(o.Nombre == "VI_DomAF_CP"){
                if(o.Valor != 0){
                    $("#codigopostal_prospecto").val(o.Valor);
                }
            }
            if(o.Nombre == "VI_DomAF_Prov"){
                if(o.Valor != 0){   
                    $("#provincia_prospecto").val(o.Valor);
                }
            }
            if(o.Nombre == "VI_DomAF_Calle"){
                if(o.Valor != 0){
                    direccion = o.Valor;
                }
            }
            if(o.Nombre == "VI_DomAF_Nro"){
                if(o.Valor != 0){
                    direccion += " " + o.Valor;
                    $("#direccion_prospecto").val(direccion);
                }
            }
        })
        )
        .catch(function(err){
            jQuery("#nombre_prospecto").attr("readonly", false);
            jQuery("#apellido_prospecto").attr("readonly", false);
            jQuery("#nacimiento_prospecto").attr("readonly", false);
            jQuery("#edad_prospecto").attr("readonly", false);
        })
    }
    
});

$("#acomp_dni_prospecto").on("input",function (e) { 
    if(this.value >= 10000000){
        fetch("https://ws01.nosis.com/rest/variables?documento="+this.value+"&format=json&Usuario=62647&Token=295420&VR=1")
        .then(response => response.json())
        .then(json => json.Contenido.Datos.Variables.forEach(o => {
            if(o.Nombre == "VI_Nombre"){
                $("#acomp_nombre_prospecto").val(o.Valor);
            }
            if(o.Nombre == "VI_Apellido"){
                $("#acomp_apellido_prospecto").val(o.Valor);
            }
            if(o.Nombre == "VI_FecNacimiento"){
                $("#acomp_nacimiento_prospecto").val(o.Valor);
            }
            if(o.Nombre == "VI_Edad"){
                $("#acomp_edad_prospecto").val(o.Valor);
            }
            if(o.Nombre == "VI_DomAF_Loc"){
                if(o.Valor != 0){
                    $("#acomp_localidad_prospecto").val(o.Valor);
                }
            }
            if(o.Nombre == "VI_DomAF_CP"){
                if(o.Valor != 0){
                    $("#acomp_codigopostal_prospecto").val(o.Valor);
                }
            }
            if(o.Nombre == "VI_DomAF_Prov"){
                if(o.Valor != 0){
                    $("#acomp_provincia_prospecto").val(o.Valor);
                }
            }
            if(o.Nombre == "VI_DomAF_Calle"){
                if(o.Valor != 0){
                    direccion = o.Valor;
                }
            }
            if(o.Nombre == "VI_DomAF_Nro"){
                if(o.Valor != 0){
                    direccion += " " + o.Valor;
                    $("#acomp_direccion_prospecto").val(direccion);
                }
            }
        })
        )
        .catch(function(err){
            jQuery("#acomp_nombre_prospecto").attr("readonly", false);
            jQuery("#acomp_apellido_prospecto").attr("readonly", false);
            jQuery("#acomp_nacimiento_prospecto").attr("readonly", false);
            jQuery("#acomp_edad_prospecto").attr("readonly", false);
        })
    }
    
});

$('#estado-entrevista').on('submit',function() {

    var id =  $("#input-estado" ).val();
    var token = $('meta[name="csrf-token"]').attr('content');
    var estado = $('select[name="select_estado"] option:selected').text();
    var data={estado:estado,id:id,_token:token};
    
    $.ajax({
        type: "post",
        url: "entrevista-estado",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: data,
        success: function (msg) {
                $("#estado-cambiado").show();
                $("#entrevista-nro"+id+" > td > button > span").text(estado);
        },
        error: function(err) { 
            alert("Hubo un error al realizar el cambio");
        }
    });
});

$('body').on('click', '[data-toggle="modal"]', function() {
    $("#input-estado" ).val($(this).data("id"));
    $("#estado-cambiado").hide();
});

$('.enviar-cert').on('click', function() {
    $("#email-reenviado").hide();
    $("#email-id").val($(this).data("id"));
    $("#input-pdf").val($(this).data("pdf"));
    $("#testest").text("asdasdsa");
    var data = {
        id: 1,
        text: 'Barn owl'
    };
    var newOption = new Option(data.text, data.id, false, false);
    $('#select_email').append(newOption).trigger('change');
});


$('#form-certificado-email').on('submit',function() {

    var id =  $("#email-id").val();
    var email = $('select[name="select_email"] option:selected').text();
    var pdf = $("#input-pdf").val();
    
    $.ajax({
        type: "get",
        url: "imprimir-prospecto/"+pdf+"/"+id+"/"+email,
        success: function (msg) {
                $("#email-reenviado").show();
        },
        error: function(err) { 
            alert("Hubo un error al enviar el mail");
        }
    });
});