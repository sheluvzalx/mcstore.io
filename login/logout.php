<?php
session_start();
session_destroy();
header("location: index.html"); // Redirigir al usuario al formulario de inicio de sesión
?>
