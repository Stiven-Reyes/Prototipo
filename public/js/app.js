var crearPersona = $(document).on("submit", "#personaForm",
    function (event) {
     event.preventDefault();
     var formData = new FormData(event.target);
     formData.append("funcion","insertPersona");
     $.ajax({
        url:"../../app/controller/home.controller.php",
        method:"POST",
        dataType:"json",
        data:formData,
        cache:false,
        contentType:false,
        processData:false
     }).done((res)=>{
        if (res.tipoRespuesta=="success"){
            alert("se ingreso correctamente");
        }else{
            alert("no se pudo mano vuleve a intentar")
        }
     })


    });
