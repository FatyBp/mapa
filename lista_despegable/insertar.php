<?php
    require_once "conexion.php";
    require_once "acciones.php";
    $continente = $_POST['lista_paises'];
    $nombre = $_POST['nombre'];
    $imagen = $_POST['url'];
    
    $datos=array($continente,$nombre,$imagen);
    
    $obj = new metodos();
    if ($obj->buscarRepetidos($nombre) == 1) {
        echo'<script type="text/javascript">
        alert("Repetido");
        window.location.href="busqueda.php";
        </script>';
    }else if ($obj->insertar($datos)) {
        header("location: todosP.php");
    }
    
?>