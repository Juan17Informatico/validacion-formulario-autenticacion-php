// procesar.php
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{2,}$/", $nombre)) {
        echo "Nombre Inválido";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Correo Inválido";
        exit;
    }

    if (!preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
        echo "Contraseña Inválida";
        exit;
    }

    echo "Validaciones correctas!";
}