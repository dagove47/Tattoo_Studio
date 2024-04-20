
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

    public static function getConexion()
    {

    public static function getConexion(){

        self::$cnx = Conexion::conectar();
    }

    public static function desconectar(){
        self::$cnx = null;
    }



public function listarFechasDb()
    {
        $query = "SELECT Fecha FROM evento_agenda WHERE Disponibilidad = 0";
        $arr = array();
        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $dato = new Agenda();
                $dato->setFecha($encontrado['Fecha']);               
                $arr[] = $dato;
            }
            return $arr;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            ;
            return json_encode($error);
        }
    }


}

    

    



}



    

?>


