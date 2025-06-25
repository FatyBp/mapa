<?php
    include "./conexion.php";
    include "./acciones.php";
    $id = $_GET['id'];
    $obj = new metodos();
    if ($obj->eliminarDatos($id)) {
        header("location:todosP.php");
    }else{
        echo "error";
    }
?>