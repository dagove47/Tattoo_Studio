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
}
?>
