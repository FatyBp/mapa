<?php
    include "../clases/Conexion.php";
    include "../clases/Metodos.php";
    include "../dependencias/header.php";
    include "../dependencias/footer.php";
    
    $continente = $_POST['nombreContinente'];
    $nombrePais = $_POST['nombrePais'];
    $descripcionPais = $_POST['descripcionPais'];
    $urlPais = $_POST['urlPais'];
    $datos = array($continente,$nombrePais,$descripcionPais,$urlPais);

    $objeto = new Metodos();
    if($objeto->buscarRepetidos($nombrePais) == 1){
        echo "-> Se encontro un pais repetido. <-";
        echo'<script type="text/javascript">
                alert("Ya hay un pais con el mismo nombre");
                window.location.href="../vistas/nuevoPais.php";
            </script>';
    }else if($objeto->insertarDatos($datos)){
        header("location:../vistas/vistaPaises.php");
    }
?>