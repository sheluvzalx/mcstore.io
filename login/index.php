<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="login-container">
    <form action="login.php" method="post" id="loginForm">
      <h2>Iniciar Sesión</h2>
      <div class="input-group">
        <label for="username">Usuario</label>
        <input type="text" id="username" name="username" required>
        <span class="error" id="usernameError"></span>
      </div>
      <div class="input-group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required>
        <span class="error" id="passwordError"></span>
      </div>
      <button type="submit">Ingresar</button>
      <p>¿No tienes una cuenta? <a href="register.html">Regístrate aquí</a></p>
    </form>
  </div>
  <script src="validate.js"></script>
</body>
</html>
