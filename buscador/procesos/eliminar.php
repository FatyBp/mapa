<?php
    include "../clases/Conexion.php";
    include "../clases/Metodos.php";

    $id = $_GET['id'];
    $objeto = new Metodos();
    $respuesta = $objeto->eliminarDatos($id);
    if ($respuesta) {
        header("location:../vistas/vistaPaises.php");
    } else {
        echo "Fallo al Eliminar"; 
    }
?>