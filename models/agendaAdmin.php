<?php

require_once "../Config/Conexion.php";

class AgendaAdmin extends Conexion
{

    // Consulta para obtener las fechas ocupadas\
    protected static $cnx;

    private $fecha;
    private $disponibilidad;

    private $descripcion;
    private $email;

    private $telefono;

    public function __construct()
    {
    }

    public function getDisponibilidad()
    {

        return $this->disponibilidad;
    }

    public function setDisponibilidad($disponibilidad)
    {

        $this->disponibilidad = $disponibilidad;
    }

    public function getDescripcion()
    {

        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {

        $this->descripcion = $descripcion;
    }

    public function getEmail()
    {

        return $this->email;
    }

    public function setEmail($email)
    {

        $this->email = $email;
    }

    public function getTelefono()
    {

        return $this->telefono;
    }

    public function setTelefono($telefono)
    {

        $this->telefono = $telefono;
    }



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
        self::$cnx = Conexion::conectar();
    }

    public static function desconectar()
    {
        self::$cnx = null;
    }


public function listarFechasDb()
    {
        $query = "SELECT Fecha,Disponibilidad,Descripcion,correo,telefono FROM evento_agenda";
        $arr = array();
        try {
            self::getConexion();
            $resultado = self::$cnx->prepare($query);
            $resultado->execute();
            self::desconectar();
            foreach ($resultado->fetchAll() as $encontrado) {
                $dato = new AgendaAdmin();
                $dato->setFecha($encontrado['Fecha']);  
                $dato->setDisponibilidad($encontrado['Disponibilidad']);
                $dato->setDescripcion($encontrado['Descripcion']);
                $dato->setEmail($encontrado['correo']);
                $dato->settelefono($encontrado['telefono']);
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


    public static function insertarNuevasFechas($fecha){
        $conexion = Conexion::conectar();
        // Verificar si la fecha está disponible
        if (!self::fechaExiste($fecha)) {
            $query = "INSERT INTO evento_agenda (Fecha, Disponibilidad, Descripcion, correo, telefono) VALUES (?, 0, null, null, null)";
            try {
                $stmt = $conexion->prepare($query);
                $stmt->execute([$fecha]);
                return true;
            } catch (PDOException $ex) {
                echo "Error al insertar la fecha: " . $ex->getMessage();
                return false;
            }
        } else {
            echo "La fecha ya existe en la base de datos. No se insertará.";
            return false; // La fecha ya existe en la base de datos
        }
    }
    
    



    public static function fechaExiste($fecha){
        $conexion = Conexion::conectar();
        $query = "SELECT COUNT(*) as total FROM evento_agenda WHERE Fecha = ? ";
        $stmt = $conexion->prepare($query);
        $stmt->execute([$fecha]);
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        return $resultado['total'] > 0; // Devuelve true si la fecha está disponible (hay reservas disponibles)
    }
    
    public static function eliminarFecha($fecha) {
        $conexion = Conexion::conectar();
        $query = "DELETE FROM evento_agenda WHERE Fecha = ?";
        try {
            $stmt = $conexion->prepare($query);
            $stmt->execute([$fecha]);
            return true;
        } catch (PDOException $ex) {
            return false;
        }
    }
  
}
