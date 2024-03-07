<?php
include_once "../../config/core.php";

$obj = new core();


if (!empty($_POST)) {
    if (!empty($_POST['funcion'])) {
        switch ($_POST['funcion']) {


            case "create_persona":
                $cedula = $_POST["cedula"];
                $nombre = $_POST["nombre"];
                $email = $_POST["correo"];
                $celular = $_POST["celular"];

                if (!empty($nombre) && !empty($cedula)) {

                    $respuesta = array();
                    $query = $obj->execute("INSERT INTO persona (id, cedula, nombre, correo, celular) VALUES (NULL, '$cedula', '$nombre', '$email', '$celular')");
                    // if (mysqli_num_rows($query) != 0) {
                        $respuesta["tipoRespuesta"] = "success";
                    // } else {
                    //     $respuesta["tipoRespuesta"] = "error";
                    // }
                    echo json_encode($respuesta);
                }
                break;
        }
    }
}
