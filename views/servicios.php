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
                    <h1>NUESTOS SERVICIOS</h1>
                    <h2><i class="fas fa-tools"></i>
                    </h2>
                </div>
            </div>
        </div>
    </header>

    <!-- Contenido de la página -->
    <main class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 alert-secondary mb-2">
                <div class="text-center col-md-6 mt-2">
                    <img src="../assets/img/img-s-conferencia.png" alt="Imagen de Conferencia" class="img-fluid rounded s-img">
                </div>
                <h4 class="">CONFERENCIAS</h4>
                <p class="lead">
                    Conferencias con temas para padres de familia en relación con diversidad de problemáticas
                </p>

            </div>
            <div class="col-md-6 alert-info mb-2">
                <div class="text-center col-md-6 mt-2">
                    <img src="../assets/img/img-s-dialogo.png" alt="Imagen de Dialogo" class="img-fluid rounded s-img">
                </div>
                <h4 class="">DIALOGOS</h4>
                <p class="lead">
                    Diálogos simultáneos con diferentes temáticas
                </p>

            </div>
            <div class="col-md-6 alert-dark mb-2">
                <div class="text-center col-md-6 mt-2">
                    <img src="../assets/img/img-s-terapia.png" alt="Imagen de Dialogo" class="img-fluid rounded s-img">
                </div>
                <h4 class="">TERAPIAS</h4>
                <p class="lead">
                    Terapias individuales y de grupo
                </p>
            </div>
            <div class="col-md-6">

            </div>

        </div>
        </div>
    </main>

    <!--  inicio footer -->
    <?php
    include '../includes/footer.php';

    ?>


</body>

</html>