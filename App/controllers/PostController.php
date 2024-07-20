<?php
require_once dirname(__DIR__) . '/models/PostModel.php';

class PostController {
    private $postModel;
    

    public function __construct() {
        $this->postModel = new PostModel();
    }

    public function index() {
        $posts = $this->postModel->getPosts();
        #require_once dirname(__DIR__) . '/views/post_view.php';
        require_once dirname(__DIR__) . '/views/check_khodam.php';
    }

    public function post() {

        $username = $_GET['username'];
        echo $username;
        $this->postModel->addPost($username);
        header('Location: /mvc');
        exit();
        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     $username = $_POST['username'];
        //     // $khodam = $_POST['khodam'];
        //     $this->postModel->addPost($username);
        //     header('Location: /mvc'); // Redirect ke halaman index
        //     exit();
        // } else {
        //     //echo 'error';
        //     require_once dirname(__DIR__) . '/views/post_add.php';
        // }
    }
}
?>
