<?php
require_once "../models/clientes.php";
require_once "../models/admin.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $password = $_POST["password"];
        $email = $_POST["email"];

        if (strpos($email, "@admin.com")) {
            $admin = Admin::buscarPorUsuario($email);

            if ($admin && $password == $admin['Contraseña']) {
                // Iniciar sesión y redirigir al panel de control o página de bienvenida
                $_SESSION['isAdmin'] = true; // Asignar valor a $_SESSION['loggedin']
                $_SESSION['loggedin'] = true;
                header("Location: ../views/pages/adminDashboard.php");
                exit();
            } else {
                echo "Usuario o contraseña de cuenta Admin incorrectos. " . $admin['Contraseña'];
            }
        } else {
            $cliente = Cliente::buscarPorEmail($email);

            if ($cliente && password_verify($password, $cliente['Contraseña'])) {
                // Iniciar sesión y redirigir al panel de control o página de bienvenida
                $_SESSION['isAdmin'] = false; // Asignar valor a $_SESSION['loggedin']
                $_SESSION['loggedin'] = true;
                header("Location: ../views/pages/home.php");
                exit();
            } else {
                echo "Correo electrónico o contraseña incorrectos.";
            }
        }
    }
}
?>
