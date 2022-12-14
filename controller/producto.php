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
            $sub_array[] = $row["cat_nombre"];
            $sub_array[] = $row["nombre"];
            $sub_array[] = $row["descripcion"];
            $sub_array[] = $row["cantidad"];
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

    case "guardaryeditar":
        $datos = $producto->get_producto_id($_POST["prod_id"]);
        if (empty($_POST["prod_id"])) {
            if (is_array($datos) == true and count($datos) == 0) {
                $producto->insert_producto($_POST["cat_id"], $_POST["prod_nombre"], $_POST["prod_descripcion"], $_POST["prod_cantidad"]);
            }
        } else {
            $producto->update_producto($_POST["prod_id"], $_POST["cat_id"], $_POST["prod_nombre"], $_POST["prod_descripcion"], $_POST["prod_cantidad"]);
        }
        break;

    case "mostrar":
        $datos = $producto->get_producto_id($_POST["prod_id"]);
        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["prod_id"] = $row["id"];
                $output["cat_id"] = $row["cat_id"];
                $output["prod_nombre"] = $row["nombre"];
                $output["prod_descripcion"] = $row["descripcion"];
                $output["prod_cantidad"] = $row["cantidad"];
            }
            echo json_encode($output);
        }
        break;

    case "eliminar":
        $producto->delete_producto($_POST["prod_id"]);
        break;
}