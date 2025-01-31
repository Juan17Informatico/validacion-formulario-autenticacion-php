<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <header></header>
    <main>
        <form action="" method="post">
            <div>
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" required pattern="^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{2,50}$"
                    placeholder="Ej. Juan Pérez"
                    title="El nombre solo puede contener letras y espacios (2-50 caracteres)">
            </div>

            <div>
                <label for="email">Correo</label>
                <input type="email" name="email" id="email" required placeholder="Ej. usuario@email.com">
            </div>

            <div>
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" required autocomplete="off"
                    pattern="(?=.*\d)(?=.*[a-zA-Z]).{6,20}"
                    placeholder="Mínimo 6 caracteres, al menos una letra y un número"
                    title="Debe contener al menos una letra, un número y entre 6 y 20 caracteres">
            </div>

            <div>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </main>
    <footer></footer>
</body>

</html>