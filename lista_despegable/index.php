<?php include "./header.php";
      include "./conexion.php";
      include "./acciones.php";
    ?>

    <div class="container mt-4">
        <div class="row">
        <div class="btn-group">
        </div>
            <div class="col text-center">
                <h2 class="text-danger">Lista buscador</h2>
                <div class="navbar navbar-expand-lg">
                    <div class="container">
                        <a class="navbar-brand" href="index.php">Inicio</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item"><a class="nav-link active" href="./busqueda.php">Agregar</a></li>
                                <li class="nav-item"><a class="nav-link active" href="./todosP.php">Paises</a></li>
                                <li class="nav-item"><a class="nav-link active" href="./mapa.php">Mapa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <form action="./paises.php" method="POST" class="form-control mt-3">
                
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
                <div class="row justify-content-center">
                    <div class="col-4">
                    <button type="submit" class="btn btn-success">Ir</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>

<?php include "footer.php"; ?>

