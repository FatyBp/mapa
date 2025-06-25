<?php
    require_once "conexion.php";
    require_once "accion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <title>Datatable</title>
</head>
<body>
 <div class="container">
     <div class="row">
         <div class="col">
            <h2>tabla estudiantes</h2>
            <table id="tablaestudiantes" class="table">
                 <thead>
                     <td>Nombre</td>
                     <td>Apellido Paterno</td>
                     <td>Apellido Materno</td>
                 </thead>
                    <?php 
                        $objeto = new metodos();
                        $sql="SELECT id,nombre,apellido_paterno,apellido_materno from t_personas";
                        $datos=$objeto->mostrardatos($sql);
                        foreach ($datos as  $key) :
                            
                     ?>
                    <tr>
                        <td><?=$key['nombre'] ?></td>
                        <td><?=$key['apellido_paterno']  ?></td>
                        <td><?=$key['apellido_materno']  ?></td>
                        
                    </tr>
                    <?php endforeach; ?>
            </table>
         </div>
     </div>
 </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="estudiantes.js"></script>
</body>
</html>
