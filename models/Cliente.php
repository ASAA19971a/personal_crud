<?php
class Cliente extends Conectar
{
    public function get_cliente()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT * FROM cliente";

        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function get_cliente_id($cliente_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT * FROM cliente WHERE cliente_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cliente_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function delete_cliente($cliente_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "DELETE FROM cliente
                WHERE
                    cliente_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cliente_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function insert_cliente($cliente_nombre, $cliente_mail, $cliente_celular)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO cliente
                    (cliente_id, nombre, email, celular)
                VALUES
                    (NULL, ?,?,?);";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cliente_nombre);
        $sql->bindValue(2, $cliente_mail);
        $sql->bindValue(3, $cliente_celular);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function update_cliente($cliente_id, $cliente_nombre, $cliente_mail, $cliente_celular)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "UPDATE cliente 
                SET
                    nombre=?,
                    email=?,
                    celular=?
                WHERE
                    cliente_id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cliente_nombre);
        $sql->bindValue(2, $cliente_mail);
        $sql->bindValue(3, $cliente_celular);
        $sql->bindValue(4, $cliente_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
}