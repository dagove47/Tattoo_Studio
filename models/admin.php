<?php
require_once "../Config/Conexion.php";

class Admin {

    public static function buscarPorUsuario($email) {
        try {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM administradores WHERE CorreoElectronico = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->execute([$email]);
            return $stmt->fetch();
        } catch (PDOException $ex) {
            return null;
        }
    }

    public static function iniciarSesion($email, $password) {
        // Busca al admin por su correo electrónico
        $admin = self::buscarPorUsuario($email);

        // Si el admin no existe o la contraseña es incorrecta, retorna falso
        if (!$admin || !password_verify($password, $admin["Contraseña"])) {
            return false;
        }

        // Inicia la sesión y almacena el ID del admin en la variable de sesión
        session_start();
        $_SESSION["AdminID"] = $admin["ID"];

        return true;
    }
}
?>
