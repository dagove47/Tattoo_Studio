<?php
require_once "../Config/Conexion.php";

class Cotizacion extends Conexion
{
    protected static $cnx;

    private $id;
    private $nombre;
    private $telefono;
    private $correo;
    private $estilo;
    private $descripcion;
    private $rutaImagen;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getEstilo()
    {
        return $this->estilo;
    }

    public function setEstilo($estilo)
    {
        $this->estilo = $estilo;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function getrutaImagen()
{
    return $this->rutaImagen;
}


    public function setrutaImagen($ruta_imagen)
    {
        $this->rutaImagen = $ruta_imagen;
    }

    public static function getConexion()
    {
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar()
    {
        self::$cnx = null;
    }

    public function listarCotizaciones()
    {
        $query = "SELECT * FROM cotizaciones";
        $arr = array();
        try {
            self::getConexion();
            $resultado = self::$cnx->query($query);
            while ($cotizacion = $resultado->fetch(PDO::FETCH_ASSOC)) {
                $objCotizacion = new Cotizacion();
                $objCotizacion->setId($cotizacion['id']);
                $objCotizacion->setNombre($cotizacion['Nombre']);
                $objCotizacion->setTelefono($cotizacion['Telefono']);
                $objCotizacion->setCorreo($cotizacion['Correo']);
                $objCotizacion->setEstilo($cotizacion['Estilo']);
                $objCotizacion->setDescripcion($cotizacion['Descripcion']);
                $objCotizacion->setRutaImagen($cotizacion['ruta_imagen']);
                $arr[] = $objCotizacion;
            }
            self::desconectar();
            return $arr;
        } catch (PDOException $Exception) {
            self::desconectar();
            $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
            return json_encode($error);
        }
    }
    public function eliminarCotizacion($id)
{
    $query = "DELETE FROM cotizaciones WHERE id = :id";
    try {
        self::getConexion();
        $statement = self::$cnx->prepare($query);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $success = $statement->execute();
        self::desconectar();
        return $success;
    } catch (PDOException $Exception) {
        self::desconectar();
        $error = "Error " . $Exception->getCode() . ": " . $Exception->getMessage();
        return json_encode($error);
    }
}

}
?>
