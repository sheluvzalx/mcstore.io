<?php
session_start();
include('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Buscar al usuario en la base de datos
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Verificar la contraseña
        if (password_verify($password, $row['password'])) {
            // Iniciar sesión
            $_SESSION['username'] = $username;
            header("location: welcome.php"); // Redirigir al usuario a la página de bienvenida
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
}
?>
