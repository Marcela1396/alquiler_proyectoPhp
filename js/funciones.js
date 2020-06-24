$(document).ready(function() {
    $('#formRegistroAutos').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST", // metodo por el cual se envian los datos
            data: $("#formRegistroAutos").serialize(), // Se toman todos los datos del formulario
            url: "./registrarAutos.php", // A donde se dirige para hacer el registro en la BD
            success: function(res) {
                if (res == 1) {
                    alert("Registrado");
                } else {
                    alert("No Registrado");
                }
            },
            error: function() {
                alert("No se ha podido obtener la informacion");
            },
            beforeSend: function() {
                alert("Enviando");
            }
        });
    });
});