<?php
// app/controllers/TaskController.php
class TaskController {
    private taskModel;

    public function __construct($db) {
        $this->taskModel = new Task($db);
    }

    public function index(): void {
        $tasks = $this->taskModel->getAllTasks();
        include 'app/views/index.php';
    }

    public function edit($id) {
        $task = $this->taskModel->getTaskById($id);
        include 'app/views/edit.php';
    }

    public function update($id, $title, $description) {
        $this->taskModel->updateTask($id, $title, $description);
        header("Location: //index.php");
        exit();
    }

    public function delete($id) {
        $this->taskModel->deleteTask($id);
        header("Location: ");
        exit();
    }

    public function create($title, $description) {
        $this->taskModel->createTask($title, $description);
        header("Location: ../tskmgr/index.php");
        exit();
    }
}

