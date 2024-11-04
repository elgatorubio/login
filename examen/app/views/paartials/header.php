<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Tareas</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/styles.css"> 
</head>
<body>
    <header>
        <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand text-white" href="/tskmgr">Gestión de Tareas</a>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/tskmgr">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="create.php">Crear Tarea</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="<?php echo $base_url; ?>logout.php">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="container mt-4">
