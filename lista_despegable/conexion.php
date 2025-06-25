<?php
        class Conexion{
            public function Conectar(){
                $servidor = "localhost";
                $usuario = "root";
                $password = "";
                $bd = "paises" ;

                $conexion = new mysqli($servidor,$usuario, $password, $bd);

                return $conexion;
            }
        }
        // if (Conexion::conectar()) {
        //     echo "correcta";
        // }else{
        //     echo "no correcta";
        // }
    ?>