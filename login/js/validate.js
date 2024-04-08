document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("loginForm");
    const registerForm = document.getElementById("registerForm");
  
    if (loginForm) {
      loginForm.addEventListener("submit", function (event) {
        event.preventDefault();
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;
  
        // Validación del formulario (puedes agregar aquí tu lógica de validación)
  
        this.submit();
      });
    }
  
    if (registerForm) {
      registerForm.addEventListener("submit", function (event) {
        event.preventDefault();
        const username = document.getElementById("username").value;
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
  
        // Validación del formulario (puedes agregar aquí tu lógica de validación)
  
        this.submit();
      });
    }
  });
  