<?php
    include "./conexion.php";
    include "./acciones.php";

    $id         = $_POST['id'];   
    $continente = $_POST['lista_paises'];
    $nombre     = $_POST['nombre'];
    $descripcion= $_POST['descripcion']; // 🚨 ¡debes agregar este campo!
    $url        = $_POST['url'];

    $datos = array($id, $continente, $nombre, $descripcion, $url);

    $obj = new metodos();
    if ($obj->actualizaDatos($datos)) {
        header("location: todosP.php");
    } else {
        echo "error al actualizar";
    }
?>
