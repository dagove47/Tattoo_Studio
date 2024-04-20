
<?php
require_once "../Config/Conexion.php";

class Agenda extends Conexion
{
    private $fecha;
    
    protected static $cnx;

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    public static function getConexion(){
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar(){
        self::$cnx = null;
    }
    public function listarFechasDb()
    {
        $query = "SELECT Fecha FROM evento_agenda WHERE Disponibilidad = 0";
        
        try {
            // Establecer conexión
            $this->conectar();

            // Preparar la consulta
            $statement = self::$cnx->prepare($query);;

            // Ejecutar la consulta
            $statement->execute();

            // Obtener los resultados
            $resultados = $statement->fetchAll(PDO::FETCH_ASSOC);

            // Cerrar la conexión
            $this->desconectar();

            // Crear un array para almacenar las fechas
            $fechas = [];

            // Recorrer los resultados y almacenar las fechas en el array
            foreach ($resultados as $fila) {
                $fecha = new Agenda();
                $fecha->setFecha($fila['Fecha']);
                $fechas[] = $fecha;
            }

            return $fechas;
        } catch (PDOException $ex) {
            // Manejar errores
            return "Error " . $ex->getCode() . ": " . $ex->getMessage();
        }
    }
    

    public function obtenerDatos() {
        // Aquí realizas la lógica para obtener los datos desde la base de datos
        return ["dato1", "dato2", "dato3"];
    }



}



    

?>

