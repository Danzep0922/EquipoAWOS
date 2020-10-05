<?php
require_once './conexion.php';
require_once './checa_sesion.php'
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <?php
    readfile('./menu.html');
    ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-users"></i> Clientes
            </div>
            <div class="card-body">
                <table class="table table-striped table-sm table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width:20%;" scope="col">Nombre</th>
                            <th style="width:20%;" scope="col">Primer apellido</th>
                            <th style="width:20%;" scope="col">Segundo apellido</th>
                            <th style="width:20%;" scope="col">Telefono celular</th>
                            <th style="width:20%;" scope="col">Correo electronico</th>
                            <th style="width:100%;" scope="col">
                                <a href="clientes_formulario.php" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = 'select idcliente, nombre, primer_apellido, segundo_apellido, numero_celular, correo_electronico from clientes order by nombre, primer_apellido  asc';
                        foreach ($conexion->query($sql) as $registro) {
                            $registro['nombre'] = htmlentities($registro['nombre']);
                            $registro['primer_apellido'] = htmlentities($registro['primer_apellido']);
                            $registro['segundo_apellido'] = htmlentities($registro['segundo_apellido']);
                            $registro['numero_celular'] = htmlentities($registro['numero_celular']);
                            $registro['correo_electronico'] = htmlentities($registro['correo_electronico']);
                            echo <<<fin

                            <tr>
                                <td>{$registro['nombre']}</td>
                                <td>{$registro['primer_apellido']}</td>
                                <td>{$registro['segundo_apellido']}</td>
                                <td>{$registro['numero_celular']}</td>
                                <td>{$registro['correo_electronico']}</td>
                                <td>
                                <a href="clientes_editar.php?idcliente={$registro['idcliente']}" class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                                </td>
                            </tr>
fin;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>