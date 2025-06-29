<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../IMAGENES/icon_principal.png" type="image/png">
    <title>HERV COMPANY - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-primary sticky-top border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="Lista_usuarios.php">Modo Admin👓</a>



                <div class="collapse navbar-collapse justify-content-between">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Lista_usuarios.php">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="Lista_empleados.php">Empleados Asesoría</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="Lista_habilidad.php">Habilidad</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="Lista_Convenios.php">Convenio</a>
                        </li>
                    </ul>

                    <span class="navbar-text text-white me-3">
                        Bienvenido, <?php echo htmlspecialchars($_SESSION["nombre"]);?>
                        |
                        <a href="../Aplic_Web/Cerrar_Sesion/logout.php" class="text-white text-decoration-underline">Cerrar Sesión</a>
                    </span>

                </div>




            </div>
        </nav>
    </header>
    <div class="container">