<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <main>
        <form action="procesar.php" method="post" id="form">
            <div>
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" required pattern="^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{2,50}$" placeholder="Ej. Juan Pérez" title="El nombre solo puede contener letras y espacios (2-50 caracteres)">
            </div>
            <div>
                <label for="email">Correo</label>
                <input type="email" name="email" id="email" required placeholder="Ej. usuario@email.com">
            </div>
            <div>
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" required autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}" placeholder="Mínimo 8 caracteres, al menos una mayúscula, un número y un carácter especial">
            </div>
            <button type="submit">Enviar</button>
        </form>
        <div id="mensajeError" style="color: red;"></div>
    </main>
    <script src="validaciones.js"></script>
</body>

</html>