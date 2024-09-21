<?php
session_start();

// Aquí puedes definir los usuarios y contraseñas permitidos
$valid_users = [
    'usuario1' => 'contraseña1',
    'usuario2' => 'contraseña2'
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (array_key_exists($username, $valid_users) && $valid_users[$username] === $password) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php"); // Redirigir a una página de bienvenida
        exit();
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>