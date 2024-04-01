<?php
require_once "../models/clientes.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["name"]) && isset($_POST["lastname"]) && isset($_POST["email"]) && isset($_POST["password"])) {
        $nombre = $_POST["name"];
        $apellido = $_POST["lastname"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Encriptar la contraseña

        if (Cliente::registrar($nombre, $apellido, $email, $password)) {
            // Redireccionar a la página de inicio de sesión
            header("Location: ../views/pages/login.php");
            exit();
        } else {
            echo "Error al registrar el cliente.";
        }
    }
}
?>
