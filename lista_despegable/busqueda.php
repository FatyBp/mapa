<?php include "./header.php";
      include "./conexion.php";
      include "./acciones.php";
    ?>

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <form action="insertar.php" method="POST" class="form-control mt-3">
                    <div class="card mt-4">
                        <h1 class="text-success">Insertar Pais</h1>
                        <div class="card-body">
                        <select name="lista_paises" id="lista_paises" class="form-select">
                            <?php
                                $obj = new metodos();
                                $datos = $obj->mostrarSelect();
                                foreach($datos AS $key):
                            ?>
                            <option value="<?= $key['id_continente'] ?>"><?= $key['nombreContinente'] ?></option>
                            <?php
                                endforeach;
                            ?>
                        </select>
                        <label for="" class="text">Nombre de pais</label>
                            <input required class="form-control " type="text" name="nombre">
                        <label for="" class="text">URL de imagen</label>
                            <input required class="form-control " type="text" name="url">
                        </div>
                        <button class="btn btn-primary"> GUARDAR</button>
                    </div>
                </form>
                <a href="./index.php" class="btn btn-primary active" aria-current="page">inicio</a>
            <a href="./busqueda.php" class="btn btn-primary">Agregar</a>
            </div>
        </div>
    </div>

<?php include "footer.php"; ?>
