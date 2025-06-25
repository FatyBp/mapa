<?php
    include "./clases/Conexion.php";
    include "./clases/Metodos.php";
    include "./dependencias/header.php";
    include "./dependencias/footer.php";
?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
<div class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="vistas/nuevoPais.php">Nuevo País</a></li>
                <li class="nav-item"><a class="nav-link active" href="vistas/vistaPaises.php">Vista de los Paises</a></li>
                <li class="nav-item"><a class="nav-link active" href="mapa/mapa.php">Mapa</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <h1 class="display-4 text-center">Buscador: Continente y País</h1>
                <hr>
                <form action="vistas/vista.php" method="POST">
                    <select name="listaPaises" id="listaPaises">
                        <option selected>Seleccionar Continente...</option>
                        <option value="1">América</option>
                        <option value="2">Asia</option>
                        <option value="3">Europa</option>
                        <option value="4">África</option>
                        <option value="5">Oceanía</option>
                    </select>
                    <div class="row text-center">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4"><button class="btn btn-md btn-success mt-4 border border-dark">Ir a buscar</button></div>
                        <div class="col-sm-4"></div>
                    </div>
                </form>
                <hr>
            </div>
        </div>
    </div>
</div>
<script src="JS/listaPaises.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>