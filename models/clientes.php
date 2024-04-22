<?php
require_once "../Config/Conexion.php";

class Cliente {
    public static function registrar($nombre, $apellido, $email, $password) {
        try {
            $conexion = Conexion::conectar();
            $sql = "INSERT INTO Clientes (Nombre, Apellido, CorreoElectronico, Contraseña) VALUES (?, ?, ?, ?)";
            $stmt = $conexion->prepare($sql);
            $stmt->execute([$nombre, $apellido, $email, $password]);
            return true;
        } catch (PDOException $ex) {
            return false;
        }
    }

    public static function buscarPorEmail($email) {
        try {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM Clientes WHERE CorreoElectronico = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->execute([$email]);
            return $stmt->fetch();
        } catch (PDOException $ex) {
            return null;
        }
    }

    public static function iniciarSesion($email, $password) {
        // Busca al cliente por su correo electrónico
        $cliente = self::buscarPorEmail($email);

        // Si el cliente no existe o la contraseña es incorrecta, retorna falso
        if (!$cliente || !password_verify($password, $cliente["Contraseña"])) {
            return false;
        }

        // Inicia la sesión y almacena el ID del cliente en la variable de sesión
        session_start();
        $_SESSION["cliente_id"] = $cliente["ID"];
        $_SESSION['loggedin'] = true;

        return true;
    }
}
?>
