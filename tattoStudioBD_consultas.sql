

  -- Las consultas que se van a realizar para poder montar los dashboard

-- 1. Clientes que más han gastado en un año
SELECT c.ClienteID, c.Nombre, c.Apellido, SUM(t.MontoPagado) as TotalGastado
FROM studio_tatto.transacciones t
JOIN studio_tatto.clientes c ON t.ClienteID = c.ClienteID
WHERE YEAR(t.FechaTransaccion) = 2024
GROUP BY c.ClienteID
ORDER BY TotalGastado DESC
LIMIT 5;

-- 2 Categorías de Tatuajes más Populares:

SELECT tt.Categoria, COUNT(*) as NumeroDeTatuajes
FROM studio_tatto.tatuajes tt
JOIN studio_tatto.transacciones tr ON tt.TatuajeID = tr.TatuajeID
GROUP BY tt.Categoria
ORDER BY NumeroDeTatuajes DESC
LIMIT 5;

-- 3. Listado de clientes por zona del cuerpo
SELECT tt.ZonaCuerpo, COUNT(*) as NumeroDeTatuajes
FROM studio_tatto.tatuajes tt
JOIN studio_tatto.transacciones tr ON tt.TatuajeID = tr.TatuajeID
GROUP BY tt.ZonaCuerpo
ORDER BY NumeroDeTatuajes DESC
LIMIT 5;

-- 4. Clientes que más han pagado por una categoría de tatuaje
SELECT c.ClienteID, c.Nombre, c.Apellido, t.Categoria, SUM(tr.MontoPagado) as TotalGastado
FROM studio_tatto.clientes c
JOIN studio_tatto.transacciones tr ON c.ClienteID = tr.ClienteID
JOIN studio_tatto.tatuajes t ON tr.TatuajeID = t.TatuajeID
GROUP BY c.ClienteID, t.Categoria
ORDER BY TotalGastado DESC
LIMIT 5;

-- 5. Mas tatuajes por edad
SELECT TIMESTAMPDIFF(YEAR, c.FechaNacimiento, CURDATE()) AS Edad, COUNT(*) as NumeroDeTatuajes
FROM studio_tatto.clientes c
JOIN studio_tatto.transacciones tr ON c.ClienteID = tr.ClienteID
WHERE YEAR(tr.FechaTransaccion) = YEAR(CURDATE())
GROUP BY Edad
ORDER BY NumeroDeTatuajes DESC
LIMIT 5;

-- 6. Gráfico de rango de edades y técnicas más aplicadas
SELECT 
    TécnicasEdad.Tecnica, 
    TécnicasEdad.Edad, 
    COUNT(*) as NumeroDeTatuajes
FROM (
    SELECT 
        tt.Tecnica,
        TIMESTAMPDIFF(YEAR, c.FechaNacimiento, CURDATE()) AS Edad,
        tr.TransaccionID
    FROM 
        studio_tatto.tatuajes tt
    JOIN 
        studio_tatto.transacciones tr ON tt.TatuajeID = tr.TatuajeID
    JOIN 
        studio_tatto.clientes c ON tr.ClienteID = c.ClienteID
) as TécnicasEdad
GROUP BY 
    TécnicasEdad.Tecnica, TécnicasEdad.Edad
ORDER BY 
    NumeroDeTatuajes DESC
LIMIT 5;
