<?php
    include "../clases/Conexion.php";
    include "../clases/Metodos.php";

    $id = $_POST['id'];
    $idContinente = $_POST['id_continente'];
    $nombrePais = $_POST['nombrePais'];
    $descripcionPais = $_POST['descripcionPais'];
    $urlPais = $_POST['urlPais'];
    $datos =  array($idContinente,$nombrePais,$descripcionPais,$urlPais,$id);

    $objeto = new Metodos();
    $respuesta = $objeto->actualizarDatos($datos);
    if ($respuesta) {
        header("location:../vistas/vistaPaises.php");
    }else{
        echo "Fallo al actualizar";
        print_r($datos);
    }
?>