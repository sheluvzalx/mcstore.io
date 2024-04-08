<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
    header("Location: index.html"); // Redirigir al index.html fuera de la carpeta actual
    exit();
}

// Obtener el nombre de usuario de la sesión
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="welcome-container">
        <h2>Bienvenido, <?php echo $username; ?>!</h2>
        <p>¡Has iniciado sesión correctamente!</p>
        <a href="logout.php">Cerrar Sesión</a>
    </div>
</body>
</html>
