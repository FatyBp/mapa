<?php
    include "../../clases/Conexion.php";
    include "../../clases/Metodos.php";
    include "../../dependencias/header.php";
    include "../../dependencias/footer.php";
?>
<link rel="shortcut icon" href="../../librerias/icon/Xanna.ico">
<style>
    body{
        background: url(../../librerias/img/el_mundo.webp)
        no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
    }
</style>
<div class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="../../index.php">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="../../vistas/nuevoPais.php">Nuevo País</a></li>
                <li class="nav-item"><a class="nav-link active" href="../../vistas/vistaPaises.php">Vista de los Paises</a></li>
                <li class="nav-item"><a class="nav-link active" href="../../mapa/mapa.php">Mapa</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="p-5 mb-4 mt-4 bg-light rounded-3 border border-dark">
                <h1 class="display-4 text-center">Paises del Continente Asiatico</h1>
                <hr class="my-4">
                <table class="table table-bordered table-striped table-hover text-center" id="table">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center">País</th>
                            <th class="text-center">Descripcion del País</th>
                            <th class="text-center">Bandera</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $objeto = new Metodos();
                            $sql = "SELECT * FROM v_continente_pais WHERE idContinente = 2";
                            $datos=$objeto->mostrarDatos($sql);
                            foreach($datos as $key){
                        ?>
                        <tr>
                            <td><?php echo $key['nombrePais']; ?></td>
                            <td><?php echo $key['descripcionPais']; ?></td>
                            <td><img src="<?php echo $key['urlPais']; ?>" style="width: 60px; height: 35px"></td>
                        </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                </table>
                <hr class="my-4">
                <div class="row text-center">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4"><a class="btn btn-primary btn-lg border border-dark" href="../../mapa/mapa.php" role="button">Regresar a la seleccion</a></div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../../JS/datatable.js"></script>