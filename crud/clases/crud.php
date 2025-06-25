<?php
class Crud {
    public function listarDireccionesPersonas(){
        $c=new Conexion();
        $conexion = $c->conectar();
        $sql = "SELECT * FROM v_personas_direcciones";
        $respuesta = mysqli_query($conexion,$sql);
        return mysqli_fetch_all($respuesta,MYSQLI_ASSOC);
    }
    public function agregarDireccion($persona){
        $c=new Conexion();
        $conexion = $c->conectar();
        $sql= "INSERT INTO t_direcciones (calle,colonia,delegacion,estado,cp) 
            VALUE ('$persona[3]','$persona[4]','$persona[5]','$persona[6]','$persona[7]')";
        $resultado = mysqli_query($conexion,$sql);
        return mysqli_insert_id($conexion);
    }
    public function agregarPersona($persona,$idDireccion){
        $c=new Conexion();
        $conexion = $c->conectar();
        $sql= "INSERT INTO t_persona (id_direccion,nombre,paterno,materno) 
        VALUE ('$idDireccion','$persona[0]','$persona[1]','$persona[2]')";
        return mysqli_query($conexion,$sql);

    }
    public function agregarDireccionPersona($persona){
        $idDireccion = $this ->agregarDireccion($persona);
        if ($idDireccion > 0){
            $this->agregarPersona($persona,$idDireccion);
        }
    }
}
?>