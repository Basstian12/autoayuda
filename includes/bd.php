<?php
/* definimos nombre del servidor */

$servername = "localhost";
//definimos usuario
$username = "root";
//se define la contrasenia
$password = "";
//definir la base de datos a usar
$dbname = "autoayuda";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}else{
    /* die("Conexión exitosa "); */
}
