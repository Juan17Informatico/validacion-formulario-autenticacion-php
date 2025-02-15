<?php // procesar.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars(trim(strip_tags($_POST['name'])));
    $email = htmlspecialchars(trim(strip_tags($_POST['email'])));
    $password = htmlspecialchars(trim(strip_tags($_POST['password'])));

    if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{2,50}$/", $nombre)) {
        echo "<script>alert('Nombre Inválido');</script>";
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Correo Inválido');</script>";
        exit;
    }
    if (!preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
        echo "<script>alert('Contraseña Inválida');</script>";
        exit;
    }

    $password_hashed = password_hash($password, PASSWORD_DEFAULT);
    echo "<script>alert('Datos válidos y procesados correctamente');</script>";
}
