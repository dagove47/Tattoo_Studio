<?php
require_once "../Config/Conexion.php";

class Admin {

    public static function buscarPorUsuario($usuario) {
        try {
            $conexion = Conexion::conectar();
            $sql = "SELECT * FROM administradores WHERE Nombre_Usuario = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->execute([$usuario]);
            return $stmt->fetch();
        } catch (PDOException $ex) {
            return null;
        }
    }

    public static function iniciarSesion($usuario, $password) {
        // Busca al admin por su correo electrónico
        $admin = self::buscarPorUsuario($usuario);

        // Si el admin no existe o la contraseña es incorrecta, retorna falso
        if (!$admin || !password_verify($password, $admin["Contra"])) {
            return false;
        }

        // Inicia la sesión y almacena el ID del admin en la variable de sesión
        session_start();
        $_SESSION["AdminID"] = $admin["ID"];

        return true;
    }
}
?>
