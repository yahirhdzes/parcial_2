<?php
session_start();

// Credenciales por defecto
$default_username = "examen_parcial2";
$default_password = "Voyporel100";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar las credenciales
    if ($username == $default_username && $password == $default_password) {
        // Credenciales correctas
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: https://hdz.projectsutd.online/proyecto/");
        exit; // Asegurarse de que el script se detenga aquí
    } else {
        // Credenciales incorrectas
        echo "<script>alert('Invalid credentials'); window.location.href = 'index.html';</script>";
        exit; // Asegurarse de que el script se detenga aquí
    }
}
?>
