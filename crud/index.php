<?php
    include "./clases/conexion.php";
    include "./clases/crud.php";
    $crud = new Crud();
    $datos = $crud ->listarDireccionesPersonas();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css">
    <title>direcciones</title>
</head>

<body>
<form action="procesos/insertar.php" method="POST">
        <div class="container-fluid">
                <div class="row-12 mt-4"> 
                    <div class="col">
                        <div class="card">
                            <h2 class="text-center">REGISTRO</h2>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="" class="text">Nombre</label>
                                        <input required class="form-control " type="text" name="nombre">
                                        <label for="" class="text">Apellido Paterno</label>
                                        <input required class="form-control " type="text" name="ap">
                                        <label for="" class="text">Apellido Materno</label>
                                        <input required class="form-control " type="text" name="am">
                                        <label for="" class="text">Calle</label>
                                        <input required class="form-control " type="text" name="calle">
                                    </div>
                                    <div class="col-6">
                                        <label for="" class="text">Colonia</label>
                                        <input required class="form-control " type="text" name="colonia">
                                        <label for="" class="text">Delegacion</label>
                                        <input required class="form-control " type="text" name="delegacion">
                                        <label for="" class="text">Estado</label>
                                        <input required class="form-control " type="text" name="estado">
                                        <label for="" class="text">CP</label>
                                        <input required class="form-control " type="text" name="CP">
                                    </div>
                                </div>
                                <button class="btn btn-primary mt-4" style="left:auto">Guardar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center">TABLA DE DIRECCIONES</h2>
                <table id="tabla" class="table table-striped table-bordered nowrap" style="width:100%">
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Calle</th>
                        <th>Colonia</th>
                        <th>Delegacion</th>
                        <th>Estado</th>
                        <th>CP</th>
                    </thead>
                    <tbody>
                        <?php foreach($datos as $item): ?>
                        <tr>
                            <td><?php echo $item['nombrePersona']; ?></td>
                            <td><?php echo $item['paterno']; ?></td>
                            <td><?php echo $item['materno']; ?></td>
                            <td><?php echo $item['calle']; ?></td>
                            <td><?php echo $item['colonia']; ?></td>
                            <td><?php echo $item['delegacion']; ?></td>
                            <td><?php echo $item['estado']; ?></td>
                            <td><?php echo $item['cp']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.2/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
    <script src="direcciones.js"></script>
</body>

</html>