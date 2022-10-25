<?php
require_once("../config/conexion.php");
require_once("../models/Producto.php");

$producto = new Producto();

switch ($_GET["op"]) {
    case "listar":
        $datos = $producto->get_producto();
        $data = array(); // Crea un array data

        //NOTE - For each recorre los datos para mostrar
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $row["nombre"];
            $sub_array[] = '<button type="button" onclick="editar(' . $row["id"] . ');" id="' . $row["id"] . '" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
            $sub_array[] = '<button type="button" onclick="eliminar(' . $row["id"] . ');" id="' . $row["id"] . '" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
            $data[] = $sub_array;
        }

        //NOTE - Codigo para rellenar todos los DataTables JS
        $results = array(
            "sEcho" => 1,
            "iTotalRecords" => count($data),
            "iTotalDisplayRecords" => count($data),
            "aaData" => $data
        );
        echo json_encode($results);

        break;
}
