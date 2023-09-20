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

    <!-- Contenido de la página -->
    <!-- Encabezado de la página -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-md-6 bg-acerca text-black p-2 text-center">
                    <h1>Acerca de Nosotros</h1>
                </div>
            </div>
        </div>
    </header>


    <main class="container mt-5">
        <div class="row">
            <div class="col-xl-12 col-md-6">
                <h2 class="text-center"> A QUE SE DEDICA</h2>
                <p class="lead">
                    Las sociedades civiles están conformadas por personas sin fines de lucro que brindan apoyo a escuelas, albergues, iglesias y a comunidades en general que solicitan apoyo de profesionistas en este campo de auto ayuda psicológica o terapéutica.
                </p>
            </div>
            <div class="col-md-6 col-xl-5 alert-info rounded mb-2 mr-4">
                <div class="mb-4">
                    <h2><i class="fas fa-bullseye"></i> Misión</h2>
                    <p class="lead">Nuestra misión es proporcionar productos/servicios de alta calidad que satisfagan las necesidades de nuestros clientes y contribuyan al bienestar de la comunidad.</p>
                </div>
            </div>
            <div class="col-md-6 alert-success rounded mb-2">
                <div class="mb-4">
                    <h2><i class="fas fa-eye"></i> Visión</h2>
                    <p class="lead text-dark">Nuestra visión es ser líderes en la industria y ser reconocidos por nuestra excelencia en la satisfacción del cliente y nuestro compromiso con la innovación y la responsabilidad social.</p>
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