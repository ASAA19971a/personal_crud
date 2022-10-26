<?php

class Usuario extends Conectar
{

    public function get_usuario($usuario)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT * FROM usuarios WHERE usuario = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $usuario);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
}