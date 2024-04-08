<?php
session_start();
include('database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Encriptar la contraseña

    // Verificar si el nombre de usuario o correo electrónico ya existe en la base de datos
    $query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "El nombre de usuario o correo electrónico ya está en uso.";
    } else {
        // Insertar los datos del usuario en la base de datos
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
        if (mysqli_query($conn, $query)) {
            echo "Usuario registrado correctamente.";
            // Aquí podrías enviar un correo electrónico de confirmación si es necesario
            header("location: index.html"); // Redirigir al usuario al formulario de inicio de sesión
        } else {
            echo "Error al registrar el usuario: " . mysqli_error($conn);
        }
    }
}
?>
