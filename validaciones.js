document.getElementById("form").addEventListener("submit", function (event) {
    let nombre = document.getElementById("name").value.trim();
    let correo = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();
    let mensajeError = document.getElementById("mensajeError");
    mensajeError.innerHTML = ""; // Limpiar mensaje de error

    let errores = [];

    // Validar nombre (No vacío y al menos 3 caracteres)
    if (nombre.length < 3) {
        errores.push("El nombre debe tener al menos 3 caracteres.");
    }

    // Validar correo con regex
    let regexCorreo = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!regexCorreo.test(correo)) {
        errores.push("El correo no es válido.");
    }

    // Validar contraseña (mínimo 6 caracteres)
    if (password.length < 6) {
        errores.push("La contraseña debe tener al menos 6 caracteres.");
    }

    // Si hay errores, prevenir el envío y mostrar mensajes
    if (errores.length > 0) {
        event.preventDefault(); // Evita que el formulario se envíe
        mensajeError.innerHTML = errores.join("<br>");
    }
});
