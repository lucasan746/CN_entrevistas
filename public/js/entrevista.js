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
                $("#localidad_prospecto").val(o.Valor);
            }
            if(o.Nombre == "VI_DomAF_CP"){
                $("#codigopostal_prospecto").val(o.Valor);
            }
            if(o.Nombre == "VI_DomAF_Prov"){
                $("#provincia_prospecto").val(o.Valor);
            }
            if(o.Nombre == "VI_DomAF_Calle"){
                direccion = o.Valor;
            }
            if(o.Nombre == "VI_DomAF_Nro"){
                direccion += " " + o.Valor;
                $("#direccion_prospecto").val(direccion);
            }
        })
        )
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
                $("#acomp_localidad_prospecto").val(o.Valor);
            }
            if(o.Nombre == "VI_DomAF_CP"){
                $("#acomp_codigopostal_prospecto").val(o.Valor);
            }
            if(o.Nombre == "VI_DomAF_Prov"){
                $("#acomp_provincia_prospecto").val(o.Valor);
            }
            if(o.Nombre == "VI_DomAF_Calle"){
                direccion = o.Valor;
            }
            if(o.Nombre == "VI_DomAF_Nro"){
                direccion += " " + o.Valor;
                $("#acomp_direccion_prospecto").val(direccion);
            }
        })
        )
    }
    
});