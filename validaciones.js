document.getElementById("form").addEventListener("submit", function (event) {
    let nombre = document.getElementById("name").value.trim();
    let correo = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();
    let mensajeError = document.getElementById("mensajeError");
    mensajeError.innerHTML = "";

    let errores = [];

    if (nombre.length < 2) {
        errores.push("El nombre debe tener al menos 2 caracteres.");
    }

    let regexCorreo = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!regexCorreo.test(correo)) {
        errores.push("El correo no es válido.");
    }

    let regexPassword = /^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if (!regexPassword.test(password)) {
        errores.push("La contraseña debe tener al menos 8 caracteres, una mayúscula, un número y un carácter especial.");
    }g

    if (errores.length > 0) {
        event.preventDefault();
        mensajeError.innerHTML = errores.join("<br>");
    }
});
