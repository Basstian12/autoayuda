<?php
require('../config/bd.php');


// Consulta SQL para obtener los datos
$sql = "SELECT nombre, correo, telefono, comentarios FROM contactos";

$resultado = $conn->query($sql);

$data = array();
while ($fila = $resultado->fetch_assoc()) {
    $data[] = $fila;
}

// Devolver los datos en formato JSON
echo json_encode(array("data" => $data));

// Cerrar la conexión
$conn->close();
