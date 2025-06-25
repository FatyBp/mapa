<?php
    class Metodos{
        public function mostrarDatos($sql){
			$con = new Conexion();
            $conexion = $con->conectar();
            $result = mysqli_query($conexion, $sql);
			return mysqli_fetch_all($result, MYSQLI_ASSOC);
		}
        public function mostrarDatosCatalogo(){
			$con = new Conexion();
            $conexion = $con->conectar();
            $sql = "SELECT * FROM t_continentes";
            $result = mysqli_query($conexion, $sql);
			return mysqli_fetch_all($result, MYSQLI_ASSOC);
		}
        public function insertarDatos($datos){
            $con = new Conexion();
            $conexion = $con->conectar();
            $sql = "INSERT INTO t_paises (id_continente,nombrePais,descripcionPais,urlPais) VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]')";
            $respuesta = mysqli_query($conexion,$sql);
            return $respuesta;
        }
        public function actualizarDatos($datos){
            $con = new Conexion();
            $conexion = $con->conectar();
            $sql = "UPDATE t_paises SET id_continente='$datos[0]', nombrePais='$datos[1]', descripcionPais='$datos[2]', urlPais='$datos[3]' WHERE id_pais='$datos[4]'";
            $respuesta = mysqli_query($conexion,$sql);
            return $respuesta;
        }
        public function eliminarDatos($id){
            $con = new Conexion();
            $conexion = $con->conectar();
            $sql = "DELETE FROM t_paises WHERE id_pais='$id'";
            $respuesta = mysqli_query($conexion,$sql);
            return $respuesta;
        }
        public function buscarRepetidos($pais){
            $con = new Conexion();
            $conexion = $con->conectar();
            $sql = "SELECT * FROM t_paises WHERE nombrePais = '$pais'";
            $respuesta = mysqli_query($conexion,$sql);
            if (mysqli_num_rows($respuesta) > 0) {
                return 1;
            }else{
                return 0;
            }
        }
    }
?>