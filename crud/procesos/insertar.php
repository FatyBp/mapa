<?php
    require_once "../clases/conexion.php";
    require_once "../clases/crud.php";
    $nombre = $_POST['nombre'];
    $apellidop = $_POST['ap'];
    $apellidom = $_POST['am'];
    $calle = $_POST['calle'];
    $colonia = $_POST['colonia'];
    $delegacion = $_POST['delegacion'];
    $estado = $_POST['estado'];
    $cp =$_POST['CP'];

    $persona=array($nombre,$apellidop,$apellidom,$calle,$colonia,$delegacion,$estado,$cp);
    $obj = new Crud();
    if ($obj-> agregarDireccionPersona($persona)==0) {
        header("location:../index.php");
    }else{
        echo "fallo al agregar";
    }

?>