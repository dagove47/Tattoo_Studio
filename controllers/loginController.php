<?php
require_once "../models/clientes.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $cliente = Cliente::buscarPorEmail($email);

        if ($cliente && password_verify($password, $cliente['Contraseña'])) {
            // Iniciar sesión y redirigir al panel de control o página de bienvenida
            // Por ahora solo redirigir a una página de ejemplo
            header("Location: ../views/pages/home.php");
            exit();
        } else {
            echo "Correo electrónico o contraseña incorrectos.";
        }
    }
}
?>