<?php

class Charts
{
    public function Chart1()
    {
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=studio_tatto;charset=utf8", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT c.ClienteID, c.Nombre, c.Apellido, SUM(t.MontoPagado) as TotalGastado
            FROM studio_tatto.transacciones t
            JOIN studio_tatto.clientes c ON t.ClienteID = c.ClienteID
            WHERE YEAR(t.FechaTransaccion) = 2024
            GROUP BY c.ClienteID
            ORDER BY TotalGastado DESC
            LIMIT 5;";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados1 = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resultados1;

        } catch (PDOException $ex) {
            error_log("Error en chart1: " . $ex->getMessage());
            return null;
        }
    }

    public function Chart2()
    {
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=studio_tatto;charset=utf8", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT tt.Categoria, COUNT(*) as NumeroDeTatuajes
            FROM studio_tatto.tatuajes tt
            JOIN studio_tatto.transacciones tr ON tt.TatuajeID = tr.TatuajeID
            GROUP BY tt.Categoria
            ORDER BY NumeroDeTatuajes DESC
            LIMIT 5;";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados2 = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resultados2;

        } catch (PDOException $ex) {
            error_log("Error en chart2: " . $ex->getMessage());

            return null;
        }
    }

    public function Chart3()
    {
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=studio_tatto;charset=utf8", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT tt.ZonaCuerpo, COUNT(*) as NumeroDeTatuajes
            FROM studio_tatto.tatuajes tt
            JOIN studio_tatto.transacciones tr ON tt.TatuajeID = tr.TatuajeID
            GROUP BY tt.ZonaCuerpo
            ORDER BY NumeroDeTatuajes DESC
            LIMIT 5;";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados3 = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resultados3;

        } catch (PDOException $ex) {
            error_log("Error en chart3: " . $ex->getMessage());

            return null;
        }
    }

    public function Chart4()
    {
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=studio_tatto;charset=utf8", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT c.ClienteID, c.Nombre, c.Apellido, t.Categoria, SUM(tr.MontoPagado) as TotalGastado
            FROM studio_tatto.clientes c
            JOIN studio_tatto.transacciones tr ON c.ClienteID = tr.ClienteID
            JOIN studio_tatto.tatuajes t ON tr.TatuajeID = t.TatuajeID
            GROUP BY c.ClienteID, t.Categoria
            ORDER BY TotalGastado DESC
            LIMIT 5;";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados4 = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resultados4;

        } catch (PDOException $ex) {
            error_log("Error en chart4: " . $ex->getMessage());

            return null;
        }
    }

    public function Chart5()
    {
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=studio_tatto;charset=utf8", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT TIMESTAMPDIFF(YEAR, c.FechaNacimiento, CURDATE()) AS Edad, COUNT(*) as NumeroDeTatuajes
            FROM studio_tatto.clientes c
            JOIN studio_tatto.transacciones tr ON c.ClienteID = tr.ClienteID
            WHERE YEAR(tr.FechaTransaccion) = YEAR(CURDATE())
            GROUP BY Edad
            ORDER BY NumeroDeTatuajes DESC
            LIMIT 5;";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados5 = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resultados5;

        } catch (PDOException $ex) {
            error_log("Error en chart5: " . $ex->getMessage());

            return null;
        }
    }

    public function Chart6()
    {
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=studio_tatto;charset=utf8", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT Tecnica, COUNT(Tecnica) AS NumTatuajes
            FROM studio_tatto.tatuajes
            GROUP BY Tecnica
            ORDER BY NumTatuajes DESC
            LIMIT 5;";
            $stmt = $conexion->prepare($sql);

            $stmt->execute();
            $resultados6 = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $resultados6;

        } catch (PDOException $ex) {
            error_log("Error en chart6: " . $ex->getMessage());

            return null;
        }
    }
}
