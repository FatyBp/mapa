<?php
        class Conexion{
            public function conectar(){
                $servidor = "localhost";
                $usuario = "root";
                $password = "";
                $bd = "crud_poo" ;

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