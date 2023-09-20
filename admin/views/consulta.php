<!DOCTYPE html>
<html lang="es">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Acerca de Nosotros</title>

    <!-- Incluir la biblioteca Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- hoja de estilo general -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- link para alerta al enviar formulario -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.all.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    </head>

    <body>


        <!--  barra de navegacion -->
        <?php
        include('../includes/header.php')
        ?>

        <!-- ------------------------- -->



        <!-- Encabezado de la página -->
        <header>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12 col-md-6 bg-acerca text-black p-2 text-center">
                        <h1>Bienvenido</h1
                        <p class="lead">
                            Datos encontrados de la base de datos
                        </p>
                    </div>
                </div>
            </div>
        </header>

        <!-- Contenido de la página -->
        <main>
            <div class="container mt-4">
               
                <table id="tablaContactos" class="display">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Teléfono</th>
                            <th>Comentarios</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Los datos se cargarán aquí -->
                    </tbody>
                </table>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

            <!-- Tu código JavaScript para cargar los datos -->
            <script>
                $(document).ready(function() {
                    $('#tablaContactos').DataTable({
                        "ajax": "buscar.php", // URL del script PHP para obtener los datos
                        "columns": [{
                                "data": "nombre"
                            },
                            {
                                "data": "correo"
                            },
                            {
                                "data": "telefono"
                            },
                            {
                                "data": "comentarios"
                            }
                        ]
                    });
                });
            </script>



        </main>





        <!--  inicio footer -->
        <?php
        include '../includes/footer.php';

        ?>

    </body>

</html>