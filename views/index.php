<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Inicio</title>

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
    <main class="container mt-5">

        <div class="row">
            <div class="col-md-6">
                <img src="../assets/img/img-home.png" alt="Imagen de Bienvenida" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <p class="lead">Bienvenid@ Estamos encantados de tenerte
                    entre nosotros. <br>
                    A nombre de todos los miembros de esta asociación nos
                    gustarían extenderte nuestra más cálida bienvenida</p>
            </div>
            <div class="col-xl-12 col-md-6 mt-5">
                <h2 class="text-center">OBJETIVOS</h2>
            </div>

            <div class="col-xl-6 col-md-6 mt-2">
                <div class="card">
                    <div class="card-body bg-light rounded">
                        <div class="text-center col-md-6">
                            <img src="../assets/img//img-i-o1.png" alt="Imagen de Conferencia" class="img-fluid s-img">
                        </div>
                        <p class="lead">
                            Consolidar los principios básicos de una
                            comunicación efectiva entre padres e hijos
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 mt-2 align-content-between">
                <div class="card">
                    <div class="card-body bg-light rounded">
                        <div class="text-center col-md-6">
                            <img src="../assets/img//img-i-o2.png" alt="Imagen de Conferencia" class="img-fluid s-img">
                        </div>
                        <p class="lead">
                            Crear estrategias para que los padres puedan
                            aprender a
                            comunicarse con sus hijos adolescentes con el
                            uso de la
                            empatía
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 mt-2 mb-2">
                <div class="card">
                    <div class="card-body bg-light rounded">
                        <div class="text-center col-md-6">
                            <img src="../assets/img//img-i-o3.png" alt="Imagen de Conferencia" class="img-fluid s-img">
                        </div>
                        <p class="lead">
                            Mejorar la comunicación efectiva entre padres e
                            hijos
                        </p>

                    </div>
                </div>
            </div>


        </div>


    </main>

    <?php 
    include '../includes/footer.php';
    
    ?>
</body>

</html>