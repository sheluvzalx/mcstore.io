<?php
$servername = "localhost";
$username = "root";
$password = "spectre";
$database = "login";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
  die("La conexión a la base de datos falló: " . $conn->connect_error);
}
?>
