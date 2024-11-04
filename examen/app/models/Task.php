
class Task {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllTasks() {
        $sql = "SELECT ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getTaskById($id) {
        $sql = "SELECT ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createTask($title, $description) {
        $sql = "INSERT INTO tasks (title, description) VALUES (:title, :description)";

        $stmt->execute(['task_name' => $title, 'description' => $description]);
    }

    public function updateTask($id, $title, $description) {
        $sql = "UPDATE ;
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id, 'task_name' => $title, 'description' => $description]);
    }

    public function deleteTask($) {
        $sql = "DELETE FROM tasks WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

}
?>
