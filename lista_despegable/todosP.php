<?php
include "./header.php";
include_once "./conexion.php";
include_once "./acciones.php";
$obj = new metodos();
$datos = $obj -> mostrarTodos(); 
?>
<div class="container">
    <div class="row">
        <div class="col">
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
            <h1 class="text-center text-success mt-4">Todos los Paises</h1>
        <a href="./index.php"><button class="btn btn-primary mt-4" >volver</button></a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <table class="table" id="table2">
                <thead>
                    <th>Continente</th>
                    <th>Pais</th>
                    <th>Bandera</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    <?php foreach($datos as $key):?>
                        <tr>
                            <td><?= $key['nombreContinente']?></td>
                            <td><?= $key['nombrePais']?></td>
                            <td><img src="<?= $key['urlPais'] ?>" width="100px"></td>
                            <td><a href="./editar.php?id=<?= $key['idPais']?>" ><button type="submit" class="btn btn-warning">Editar</button></a></td>
                        <td><a href="./eliminar.php?id=<?=$key['idPais']?>"><button type="submit" class="btn btn-danger">Eliminar</button></a></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php 
include "./footer.php";
?>