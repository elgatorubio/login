<?php

$id = $_GET['id'] ?? null;

var_dump($id);
if (!$id) {
    die('ID not provided');
}

include 'partials/header.php'; 


if ($task) {
?>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Eliminar Tarea</h1>

        <div class="alert alert-warning text-center">
            <p>¿Estás seguro de que deseas eliminar la tarea <strong><?php echo htmlspecialchars($task['task_name'], ENT_QUOTES, 'UTF-8'); ?></strong>?</p>
            <p>Esta acción no se puede deshacer.</p>
        </div>
        <form action="./index.php?action=delete&id=<?php echo $task['id']; ?>" method="POST">
            <div class="text-center">
                <button type="submit" class="btn btn-danger">Eliminar</button>
                <a href="../index.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>

<?php
} else {
    echo "<p>Tarea no encontrada.</p>";
    echo($id);
}

include 'partials/footer.php';
?>