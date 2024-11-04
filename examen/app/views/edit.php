<?php include __DIR__ . '/partials/header.php';
echo("Hola");
echo($task);

if (isset($task)){
?>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Editar Tarea</h2>
        <form action="./index.php?action=update&id=<?php echo $task['id']; ?>" method="POST" class="card p-4">
            <div class="mb-3">
                <label for="title" class="form-label">Título</label>
                <input type="text" name="title" value="<?php echo $task['task_name']; ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" class="form-control" rows="4"><?php echo $task['description']; ?></textarea>
            </div>
            <div class="text-center">
                <a href="./tskmgr/index.php;" type="submit" class="btn btn-primary">Actualizar</a>
                <a href="./tskmgr/index.php;" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
<?php
} else {
    echo("Tarea no encontrada.");
}

include __DIR__ . '/partials/footer.php';
?>