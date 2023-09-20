//en este apartado se hace el registro con ajax
$(document).ready(function () {
    $("#insert").submit(function (event) {
        event.preventDefault();

        // Realizar una solicitud AJAX para enviar el formulario
        var formData = $(this).serialize(); // Serializa los datos del formulario
        $.ajax({
            type: "POST",
            url: "insertar.php", // Cambia "tu_script.php" por la URL de tu script PHP
            data: formData,
            success: function (response) {
                if (response === "success") {
                    // Mostrar una alerta de éxito
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Your work has been saved',
                        showConfirmButton: false,
                        timer: 1500
                    })
                } else {

                    // Mostrar una alerta de error
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        showConfirmButton: false,
                        text: 'No se pudo guardar los datos',
                        timer: 1500
                    })
                }
            },
            error: function () {
                // Mostrar una alerta de error en caso de un problema en la solicitud AJAX
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    showConfirmButton: false,
                    text: 'No se pudo guardar los datos',
                    timer: 1500
                })
            }
        });
    });
});