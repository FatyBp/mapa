<?php
    class Conexion{
        public function conectar(){
            try{
                return mysqli_connect(
                    'localhost',
                    'root',
                    '',
                    'paises'
                );
            }catch(\Throwable $th){
                return $th->getMessage();
            }
        }
    }
?>