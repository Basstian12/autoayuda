<?php

require('../includes/bd.php');

/* traemos los valores de nuestro input */
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$coment = $_POST['coment'];



// Aqui se hace la insercion a la base de datos

 $sql = "INSERT INTO contactos (nombre, correo, telefono, comentarios)
        VALUES ('$name','$email','$tel','$coment')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "error";
}
