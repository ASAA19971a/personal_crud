<?php
class Conectar
{
    protected $dbhost;

    //TODO - Funcion Conexion BD
    protected function Conexion()
    {
        try {
            $conectar = $this->dbhost = new PDO("mysql:host=localhost;dbname=proyecto_personal", "root", ""); //Linea conexion 
            return $conectar;
        } catch (Exception $e) {
            print "¡Error BD!: " . $e->getMessage() . "</br>";
            die();
        }
    }

    //TODO Funcion para reconoza BD caracteres utf8
    public function set_names()
    {
        return $this->dbhost->query("SET NAMES 'utf8'");
    }
}