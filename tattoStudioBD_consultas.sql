-- Las consultas que se van a realizar para poder montar los dashboard

-- 1. Clientes que más han gastado en un año
SELECT ClienteID, Nombre, Apellido, SUM(MontoPagado) AS GastoTotal
FROM Transacciones
JOIN Clientes ON Transacciones.ClienteID = Clientes.ClienteID
WHERE YEAR(FechaTransaccion) = [Año Deseado]
GROUP BY ClienteID
ORDER BY GastoTotal DESC
LIMIT 5;

-- 2 Categorías de Tatuajes más Populares:

SELECT Categoria,COUNT(*) AS Cantidad
FROM Tatuajes
GROUP BY Categoria;

-- 3. Listado de clientes por zona del cuerpo
SELECT ClienteID, Nombre, Apellido, ZonaCuerpo
FROM Tatuajes
JOIN Transacciones ON Tatuajes.TatuajeID = Transacciones.TatuajeID
JOIN Clientes ON Transacciones.ClienteID = Clientes.ClienteID
WHERE ZonaCuerpo IS NOT NULL;

-- 4. Clientes que más han pagado por una categoría de tatuaje
SELECT ClienteID, Nombre, Apellido, Categoria, MAX(MontoPagado) AS MontoMaximo
FROM Transacciones
JOIN Tatuajes ON Transacciones.TatuajeID = Tatuajes.TatuajeID
JOIN Clientes ON Transacciones.ClienteID = Clientes.ClienteID
GROUP BY ClienteID, Categoria;

-- 5. Gráfico de tatuajes por zona del cuerpo por rango de edad
SELECT ZonaCuerpo, COUNT(*) AS Cantidad
FROM Tatuajes
JOIN Transacciones ON Tatuajes.TatuajeID = Transacciones.TatuajeID
JOIN Clientes ON Transacciones.ClienteID = Clientes.ClienteID
WHERE FechaNacimiento IS NOT NULL
GROUP BY ZonaCuerpo, FLOOR(DATEDIFF(CURDATE(), FechaNacimiento) / 365 / 10);

-- 6. Gráfico de rango de edades y técnicas más aplicadas
SELECT FLOOR(DATEDIFF(CURDATE(), FechaNacimiento) / 10) AS RangoEdad, Tecnica, COUNT(*) AS Cantidad
FROM Tatuajes
JOIN Transacciones ON Tatuajes.TatuajeID = Transacciones.TatuajeID
JOIN Clientes ON Transacciones.ClienteID = Clientes.ClienteID
WHERE FechaNacimiento IS NOT NULL
GROUP BY RangoEdad, Tecnica;
