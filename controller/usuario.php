<?php
require_once("../config/conexion.php");
require_once("../models/Usuario.php");

$usuario = new Usuario();

switch ($_GET["op"]) {

    case "login":
        $datos = $usuario->get_usuario($_POST["usuarioL"]);
        if (is_array($datos) == true and count($datos) > 0) {


            foreach ($datos as $row) {
                if ($_POST["usuarioL"] == $row["usuario"] && $_POST["claveL"] == $row["password"]) {
                    header("location: view/MntProducto/");
                } else {
                    echo "<h3>Contraseña incorrecto</h3>";
                }
            }
            echo $html;
        } else {
            echo "<h3>Usuario incorrecto</h3>";
        }
        break;
}