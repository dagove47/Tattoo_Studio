<?php
require_once "../models/clientes.php";
require_once "../models/admin.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $password = $_POST["password"];
        $email = $_POST["email"];

        if (strpos($email, "@") == false) {
            $admin = Admin::buscarPorUsuario($email);

            if ($admin && password_verify($password, $admin['Contra'])) {
                // Iniciar sesión y redirigir al panel de control o página de bienvenida
                // Por ahora solo redirigir a una página de ejemplo
                header("Location: ../views/pages/adminDasboard.php");
                exit();
            } else {
                echo "Usuario o contraseña de cuenta Admin incorrectos.";
            }
        } else {
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
}
