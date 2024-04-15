<?php
require_once '../Config/Conexion.php';

class Charts {
    public function chart1() {
        try {
            $conexion = Conexion::conectar();
            $sql = "SELECT ClienteID, Nombre, Apellido, SUM(MontoPagado) AS GastoTotal
            FROM Transacciones
            JOIN Clientes ON Transacciones.ClienteID = Clientes.ClienteID
            WHERE YEAR(FechaTransaccion) = 2024
            GROUP BY ClienteID
            ORDER BY GastoTotal DESC
            LIMIT 5;";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resultados;    
            
        } catch (PDOException $ex) {
        error_log("Error en chart1: " . $ex->getMessage());
        
        return null;
        }
    }

    public function chart2() {
        try {
            $conexion = Conexion::conectar();
            $sql = "SELECT Categoria, COUNT(*) AS Cantidad
            FROM Tatuajes
            GROUP BY Categoria;
            ORDER BY Cantidad DESC
            LIMIT 5;";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $resultados;

        } catch (PDOException $ex) {
        error_log("Error en chart2: " . $ex->getMessage());
        
        return null;
        }
    }

    public function chart3() {
        try {
            $conexion = Conexion::conectar();
            $sql = "SELECT ClienteID, Nombre, Apellido, ZonaCuerpo
            FROM Tatuajes
            JOIN Transacciones ON Tatuajes.TatuajeID = Transacciones.TatuajeID
            JOIN Clientes ON Transacciones.ClienteID = Clientes.ClienteID
            WHERE ZonaCuerpo IS NOT NULL;";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $resultados;

        } catch (PDOException $ex) {
        error_log("Error en chart3: " . $ex->getMessage());
        
        return null;
        }
    }

    public function chart4() {
        try {
            $conexion = Conexion::conectar();
            $sql = "SELECT ClienteID, Nombre, Apellido, Categoria, MAX(MontoPagado) AS MontoMaximo
            FROM Transacciones
            JOIN Tatuajes ON Transacciones.TatuajeID = Tatuajes.TatuajeID
            JOIN Clientes ON Transacciones.ClienteID = Clientes.ClienteID
            GROUP BY ClienteID, Categoria;";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $resultados;

        } catch (PDOException $ex) {
        error_log("Error en chart4: " . $ex->getMessage());
        
        return null;
        }
    }

    public function chart5() {
        try {
            $conexion = Conexion::conectar();
            $sql = "SELECT ZonaCuerpo, COUNT(*) AS Cantidad
            FROM Tatuajes
            JOIN Transacciones ON Tatuajes.TatuajeID = Transacciones.TatuajeID
            JOIN Clientes ON Transacciones.ClienteID = Clientes.ClienteID
            WHERE FechaNacimiento IS NOT NULL
            GROUP BY ZonaCuerpo, FLOOR(DATEDIFF(CURDATE(), FechaNacimiento) / 365 / 10);";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $resultados;

        } catch (PDOException $ex) {
        error_log("Error en chart5: " . $ex->getMessage());
        
        return null;
        }
    }

    public function chart6() {
        try {
            $conexion = Conexion::conectar();
            $sql = "SELECT FLOOR(DATEDIFF(CURDATE(), FechaNacimiento) / 10) AS RangoEdad, Tecnica, COUNT(*) AS Cantidad
            FROM Tatuajes
            JOIN Transacciones ON Tatuajes.TatuajeID = Transacciones.TatuajeID
            JOIN Clientes ON Transacciones.ClienteID = Clientes.ClienteID
            WHERE FechaNacimiento IS NOT NULL
            GROUP BY RangoEdad, Tecnica;";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $resultados;

        } catch (PDOException $ex) {
        error_log("Error en chart6: " . $ex->getMessage());
        
        return null;
        }
    }
}
?>