<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <header></header>
    <main>
        <form action="procesar.php" method="post" id="form" >
            <div>
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" required pattern="^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{2,}$"
                    placeholder="Ej. Juan Pérez"
                    title="El nombre solo puede contener letras y espacios (mínimo 2 caracteres)">
            </div>

            <div>
                <label for="email">Correo</label>
                <input type="email" name="email" id="email" required placeholder="Ej. usuario@email.com">
            </div>

            <div>
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" required autocomplete="off"
                    pattern="^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"
                    placeholder="Al menos 8 caracteres, una mayúscula, un número y un carácter especial"
                    title="Debe contener al menos una letra mayúscula, un número, un carácter especial y mínimo 8 caracteres">
            </div>

            <div>
                <button type="submit">Enviar</button>
            </div>
        </form>
        <div id="mensajeError" style="color: red;"></div>
    </main>
    <footer></footer>

    <script src="./validaciones.js"></script>
</body>

</html>