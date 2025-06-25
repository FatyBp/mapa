<?php
    include "./header.php";
    require_once "./conexion.php";
    require_once "./acciones.php";
    $c = new Conexion();
    $conexion = $c->conectar();
    $id=$_GET['id'];
    $sql = "SELECT idContinente,nombreContinente,nombrePais,urlPais from v_continente_pais where idPais='$id'";
    $result = mysqli_query($conexion,$sql);
    $ver=mysqli_fetch_row($result);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="./actualizar.php" method="POST" class="form-control mt-3" autocomplete="off">
                    <h1 class="text-center text-warning">Editar</h1>
                    <div class="card-body">
                        <input type="text" hidden name="id" value="<?= $id ?>">
                        <label for="">Cambio de continente</label>
                        <select name="lista_paises" id="lista_paises" class="form-select">
                            <option value="<?= $ver[0] ?>"><?= $ver[1] ?></option>
                            <?php
                            $obj = new metodos();
                            $datos = $obj->mostrarSelect();
                            foreach($datos AS $key):
                        ?>
                            <option value="<?= $key['id_continente'] ?>"><?= $key['Nombre'] ?></option>
                            <?php
                                endforeach;
                            ?>
                        </select>
                        <label for="" class="text">Pais</label>
                        <input required class="form-control " type="text" name="nombre" value="<?= $ver[2]?>">
                        <label for="" class="text">Url de imagen</label>
                        <input required class="form-control " type="text" name="url" value="<?= $ver[3]?>">
                    </div>
                    <div class="row justify-content-center mb-4">
                        <button class="btn btn-primary col-5 me-5"> Guardar</button>
                        <a href="./index.php"><button class="btn btn-primary" aria-current="page">volver</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    include "./footer.php";
?>
