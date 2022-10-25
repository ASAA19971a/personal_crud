<?php
class Producto extends Conectar
{
    public function get_producto()
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT 
                    producto.id,
                    producto.cat_id,
                    producto.nombre,
                    producto.descripcion,
                    producto.cantidad,
                    categoria.cat_nombre
                FROM 
                    producto INNER JOIN
                    categoria ON
                    producto.cat_id=categoria.id
                WHERE producto.estado = 1";

        $sql = $conectar->prepare($sql);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function get_producto_id($prod_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "SELECT * FROM producto WHERE id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $prod_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function delete_producto($prod_id)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "UPDATE producto 
                SET
                    estado=0,
                    fecha_elim=now()
                WHERE
                    id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $prod_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function insert_producto($cat_id, $prod_nombre, $prod_descripcion, $cantidad)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "INSERT INTO producto
                    (id, cat_id, nombre, descripcion, cantidad, fecha_crea, fecha_mod, fecha_elim, estado)
                VALUES
                    (NULL, ?, ?, ?, ?, now(), NULL, NULL, 1);";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_id);
        $sql->bindValue(2, $prod_nombre);
        $sql->bindValue(3, $prod_descripcion);
        $sql->bindValue(4, $cantidad);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }

    public function update_producto($prod_id, $cat_id, $prod_nombre, $prod_descripcion, $cantidad)
    {
        $conectar = parent::conexion();
        parent::set_names();
        $sql = "UPDATE producto 
                SET
                    cat_id=?,
                    nombre=?,
                    descripcion=?,
                    cantidad=?,
                    fecha_mod=now()
                WHERE
                    id = ?";
        $sql = $conectar->prepare($sql);
        $sql->bindValue(1, $cat_id);
        $sql->bindValue(2, $prod_nombre);
        $sql->bindValue(3, $prod_descripcion);
        $sql->bindValue(4, $cantidad);
        $sql->bindValue(5, $prod_id);
        $sql->execute();
        return $resultado = $sql->fetchAll();
    }
}