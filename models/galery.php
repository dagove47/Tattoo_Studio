<?php
require_once "../Config/Conexion.php";

class Galery extends Conexion
{
    private $ruta_imagen;
    
    protected static $cnx;

    public function getRutaImagen()
    {
        return $this->ruta_imagen;
    }

    public function setRutaImagen($ruta_imagen)
    {
        $this->ruta_imagen = $ruta_imagen;
    }

    public static function getConexion()
    {
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar()
    {
        self::$cnx = null;
    }

    public function listarImagenes()
    {
        $query = "SELECT ruta_imagen FROM Galeria";
        $arr = array();
        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $imagen) {
                $dato = new Galery();
                $dato->setRutaImagen($imagen['ruta_imagen']);               
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
?>
