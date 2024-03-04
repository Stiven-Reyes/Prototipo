<?php
include_once "../../cofig/configuracion.php";
include_once "../../cofig/core.php";

$obj = new core($server, $user, $password, $database, $conexion);

if (!empty($_POST)) {
    if (!empty($_POST['funcion'])) {
        switch (!empty($_POST['funcion'])) {

            case "insertPersona":

                $query = $obj->execute("INSERT INTO persona (id,cedula,nombre,correo,celular )VALUES (NULL,'$cedula','$nombre','$correo','$celular')");

                $respuesta["tipoRespuesta"] = "success";
                break;

            case "select":

                $query = $obj->execute("SELECT Id_Conferencia, Titulo FROM conferencias WHERE Estado_Conferencia =" . $estado . " ");

                $select = "";
                $select .= "<option value=''>Seleccione ...</option>";
                while ($resultado = mysqli_fetch_row($query)) {
                    $select .= "<option value=" . $resultado[0] . ">" . $resultado[1] . "</option>";
                }

                echo $select;

                break;
        }
    }
}
