<?php
    include "header.php";
    require_once "conexion.php";
    require_once "acciones.php";
    $id = $_POST['lista_paises'];
$idPais= isset($_GET['id']) ? $_GET['id'] : null;

    $obj = new metodos();
    $datos = $obj->mostrarDatos($id);
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Paises</h1>
            <div class="navbar navbar-expand-lg navbar-dark bg-dark" >
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
            <a href="./index.php" class="btn btn-primary">inicio</a>
            <table class="table" id="table2">
                <thead>
                        <th>Continente</th>
                        <th>Pais</th>
                        <th>Imagen</th>
                </thead>
                <tbody>
            <?php
                    foreach($datos as $key):
                ?>
                    <tr>
                        <td><?= $key['nombreContinente']?></td>
                        <td><?= $key['nombrePais'] ?></td>
                        <td><img src="<?= $key['urlPais'] ?>" width="100px"></td>
                    </tr>
                    <?php
                    endforeach;
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php
    include "footer.php";
?>