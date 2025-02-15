// validaciones.js
document.getElementById("form").addEventListener("submit", function (event) {
    let nombre = document.getElementById("name").value.trim();
    let correo = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();
    let errores = [];

    if (nombre.length < 2) errores.push("El nombre debe tener al menos 2 caracteres.");
    let regexCorreo = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!regexCorreo.test(correo)) errores.push("Correo inválido.");
    let regexPass = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if (!regexPass.test(password)) errores.push("Contraseña inválida.");

    if (errores.length > 0) {
        event.preventDefault();
        alert(errores.join("\n"));
    }
});
