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
                <a href="clientes.php" class="btn btn-light btn-sm float-right"><i class="fa fa-chevron-circle-left"></i> regresar</a>
                <i class="fa fa-user"></i> Registro Cliente
            </div>
            <div class="card-body">
                <form action="clientes_guarda.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="primer_apellido">Primer apellido</label>
                        <input type="text" class="form-control form-control-sm" id="primer_apellido" name="primer_apellido" required>
                    </div>
                    <div class="form-group">
                        <label for="segundo_apellido">Segundo apellido</label>
                        <input type="text" class="form-control form-control-sm" id="segundo_apellido" name="segundo_apellido" required>
                    </div>
                    <div class="form-group">
                        <label for="numero_celular">Número de celular</label>
                        <input type="tel" class="form-control form-control-sm" id="numero_celular" name="numero_celular" required>
                    </div>
                    <div class="form-group">
                        <label for="correo_electronico">Correo electrónico</label>
                        <input type="email" class="form-control form-control-sm" id="correo_electronico" name="correo_electronico" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control form-control-sm" id="contrasena" name="contrasena" required>
                    </div>
                    <div class="form-group">
                        <label for="contrasena_confirma">Contraseña (confirma)</label>
                        <input type="password" class="form-control form-control-sm" id="contrasena_confirma" name="contrasena_confirma" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> guardar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>