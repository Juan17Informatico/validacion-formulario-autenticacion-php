<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars(trim(strip_tags($_POST['name'])));
    $email = htmlspecialchars(trim(strip_tags($_POST['email'])));
    $password = htmlspecialchars(trim(strip_tags($_POST['password'])));
    
    $errores = [];

    if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{2,50}$/", $nombre)) {
        $errores[] = "Nombre inválido.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "Correo inválido.";
    }
    if (!preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
        $errores[] = "Contraseña inválida.";
    }

    if (!empty($errores)) {
        echo "<html><head><title>Error</title></head><body>";
        echo "<h2>Errores encontrados:</h2><ul>";
        foreach ($errores as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul><a href='index.php'>Volver</a></body></html>";
        exit;
    }

    $password_hashed = password_hash($password, PASSWORD_DEFAULT);
    
    echo "<html><head><title>Éxito</title></head><body>";
    echo "<h2>Registro exitoso</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Correo: $email</p>";
    echo "<p>Tu información ha sido procesada correctamente.</p>";
    echo "<a href='index.html'>Volver</a>";
    echo "</body></html>";
}