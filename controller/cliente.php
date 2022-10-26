<?php
require_once("../config/conexion.php");
require_once("../models/Cliente.php");

$cliente = new Cliente();

switch ($_GET["op"]) {
    case "listar":
        $datos = $cliente->get_cliente();
        $data = array(); // Crea un array data

        //NOTE - For each recorre los datos para mostrar
        foreach ($datos as $row) {
            $sub_array = array();
            $sub_array[] = $row["nombre"];
            $sub_array[] = $row["email"];
            $sub_array[] = $row["celular"];
            $sub_array[] = '<button type="button" onclick="editar(' . $row["cliente_id"] . ');" id="' . $row["cliente_id"] . '" class="btn btn-outline-primary btn-icon"><div><i class="fa fa-edit"></i></div></button>';
            $sub_array[] = '<button type="button" onclick="eliminar(' . $row["cliente_id"] . ');" id="' . $row["cliente_id"] . '" class="btn btn-outline-danger btn-icon"><div><i class="fa fa-trash"></i></div></button>';
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
        $datos = $cliente->get_cliente_id($_POST["cliente_id"]);
        if (empty($_POST["cliente_id"])) {
            if (is_array($datos) == true and count($datos) == 0) {
                $cliente->insert_cliente($_POST["cliente_nombre"], $_POST["cliente_mail"], $_POST["cliente_celular"]);
            }
        } else {
            $cliente->update_cliente($_POST["cliente_id"],  $_POST["cliente_nombre"], $_POST["cliente_mail"], $_POST["cliente_celular"]);
        }
        break;

    case "mostrar":
        $datos = $cliente->get_cliente_id($_POST["cliente_id"]);
        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $output["cliente_id"] = $row["cliente_id"];
                $output["cliente_nombre"] = $row["nombre"];
                $output["cliente_mail"] = $row["email"];
                $output["cliente_celular"] = $row["celular"];
            }
            echo json_encode($output);
        }
        break;

    case "eliminar":
        $cliente->delete_cliente($_POST["cliente_id"]);
        break;
}