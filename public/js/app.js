

$("#personaForm").on("submit", function (event) {
    event.preventDefault(); // Evitar ejecutar el submit del formulario.

    var formData = new FormData(event.target);
    formData.append("funcion", "create_persona");
    $.ajax({
        url: "../../app/controller/persona.controller.php",
        method: "post",
        dataType: "json",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
    }).done((res) => {
        if (res.tipoRespuesta == "success") {
            swal({
        		title: 'El usuario ingresado correctamente',
        		type: res.tipoRespuesta,
        	});
        } else {
        	swal({
        		title: 'El usuario ingresado no existe',
        		type: 'warning',
        	});
        }
    });
});