

<?php
// ini kalau mau dijadiin JSON data dari DB

// cors
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

require_once 'db.php';

class PostModel {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function getPosts() {
        $query = "SELECT * FROM postingan";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}



header("Content-Type: application/json");

$postModel = new PostModel();
$posts = $postModel->getPosts();

echo json_encode($posts);
?>
