<?php
    include "../clases/Conexion.php";
    include "../clases/Metodos.php";
    include "../dependencias/header.php";
    include "../dependencias/footer.php";
?>
<style>
    body{
        background: url(../librerias/img/el_mundo.webp)
        no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
    }
</style>
<div class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="../index.php">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="nuevoPais.php">Nuevo País</a></li>
                <li class="nav-item"><a class="nav-link active" href="vistaPaises.php">Vista de los Paises</a></li>
                <li class="nav-item"><a class="nav-link active" href="../mapa/mapa.php">Mapa</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="p-5 mb-4 mt-4 bg-light rounded-3 border border-dark">
                <h1 class="text-center">Agregar Nuevo Pais</h1>
                <hr>
                <form action="../procesos/insertar.php" method="POST">
                    <div class="mb-3">
                        <label for="input1" class="form-label">Nombre del Continente:</label>
                        <select name="nombreContinente" id="nombreContinente" class="form-control border border-dark rounded-pill" required>
                            <option selected>Seleccionar Continente...</option>
                            <option value="1">América</option>
                            <option value="2">Asia</option>
                            <option value="3">Europa</option>
                            <option value="4">África</option>
                            <option value="5">Oceanía</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="input3" class="form-label">Nombre del País:</label>
                        <input type="text" class="form-control border border-dark rounded-pill" id="nombrePais" name="nombrePais"  placeholder="Ingresa aqui el nombre del país" required>
                    </div>
                    <div class="mb-3">
                        <label for="input4" class="form-label">Descripcion del País:</label>
                        <input type="text" class="form-control border border-dark rounded-pill" id="descripcionPais" name="descripcionPais" placeholder="Ingresa aqui la descripcion del país" required>
                    </div>
                    <div class="mb-3">
                        <label for="input4" class="form-label">URL de la Bandera del País:</label>
                        <input type="text" class="form-control border border-dark rounded-pill" id="urlPais" name="urlPais" placeholder="Ingresa aqui el URL de la bandera del país" required>
                    </div>
                    <div class="row text-center mt-4">
                        <div class="col-sm-4"><button class="btn btn-md btn-info border border-dark">Agregar Pais</button></div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4"><a class="btn btn-md btn-danger border border-dark" href="../index.php">Volver</a></div>
                    </div>
                </form>
                <hr>
            </div>
        </div>
    </div>
</div>