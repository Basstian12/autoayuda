<!DOCTYPE html>
<html lang="es">

<head>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

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
                    <h1>MAS INFORMACION</h1>
                    <h2><i class="fas fa-info"></i></h2>
                    <p class="lead">
                        FAVOR DE RELLENAR EL FORMULARIO
                    </p>
                </div>
            </div>
        </div>
    </header>

    <!-- Contenido de la página -->
    <main>
        <div class="container">
            <div class="row mb-2">
                <div class="bg-light col-md-6 col-xl-12">

                </div>

                <div class="col-md-6 col-xl-12">



                    <!-- el formulario se envia con js usando el metodo ajax, es por eso que se declara un id
            insertar_contactos -->

                    <form id="insert">
                        <div class="container">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre" name="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="correo">Correo Electrónico:</label>
                                    <input type="email" class="form-control" id="correo" placeholder="Ingrese su correo electrónico" name="email" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tel">Numero Telefono:</label>
                                    <input type="number" class="form-control" id="tel" placeholder="Ingrese su numero telefononico" maxlength="10" name="tel" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="consulta">Comenatarios:</label>
                                    <textarea class="form-control" id="consulta" rows="3" placeholder="Ingrese su consulta" name="coment" required></textarea>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar Consulta</button>
                    </form>
                </div>

            </div>

        </div>
        </div>


    </main>



  <!-- obtenejos nuestro codigo js para el formulario  -->
  <script src="../assets/js/script.js"></script>

    <!--  inicio footer -->
    <?php
    include '../includes/footer.php';

    ?>
  
</body>

</html>