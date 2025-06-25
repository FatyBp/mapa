<?php
    class metodos{
        public function mostrarDatos($id){
            $c = new Conexion();
            $conexion = $c->conectar();
            $sql="SELECT * FROM v_continente_pais where idContinente = '$id'";
            $resultado = mysqli_query($conexion,$sql);
            return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
        }
        public function mostrarSelect(){
            $c = new Conexion();
            $conexion = $c->conectar();
            $sql="SELECT * FROM t_continentes";
            $resultado = mysqli_query($conexion,$sql);
            return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
        }
        public function insertar($datos){
    $c = new Conexion();
    $conexion = $c->conectar();
    $sql = "INSERT INTO t_paises (id_continente, nombrePais, descripcionPais, urlPais) 
            VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]')";
    return mysqli_query($conexion, $sql);
}

        public function eliminarDatos($id){
            $c = new Conexion();
            $conexion = $c->conectar();
            $sql = "DELETE from paises where id_paises='$id'";
            return $result=mysqli_query($conexion,$sql);
        }
        public function actualizaDatos($datos){
    $c = new Conexion();
    $conexion = $c->conectar();
    $sql = "UPDATE t_paises SET 
                id_continente = '$datos[1]',
                nombrePais = '$datos[2]',
                descripcionPais = '$datos[3]',
                urlPais = '$datos[4]'
            WHERE id_pais = '$datos[0]'";
    return mysqli_query($conexion, $sql);
}

        public function buscarRepetidos($pais){
            $c = new Conexion();
            $conexion = $c->conectar();
            $sql = "SELECT * from t_paises where nombrePais = '$pais'";
            $result=mysqli_query($conexion,$sql);
            if (mysqli_num_rows($result) > 0) {
                return 1;
            }else{
                return 0;
            }
        }
public function mostrarTodos(){
    $c = new Conexion();
    $conexion = $c->conectar();
    $sql = "SELECT * FROM v_continente_pais"; // <-- vista correcta
    $resultado = mysqli_query($conexion, $sql);

    // Verificación de errores en la consulta
    if (!$resultado) {
        die("Error en la consulta SQL: " . mysqli_error($conexion));
    }

    return mysqli_fetch_all($resultado, MYSQLI_ASSOC); 
}


    }
?>