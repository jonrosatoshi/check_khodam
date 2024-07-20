<?php
require_once __DIR__ . '/App/controllers/PostController.php';

//echo "PostController.php included.<br>";

$controller = new PostController();
// $controller->index();


// jika ada kata post dalam url setelah localhost/mvc/post, maka controller->post
// if (isset($_GET['post'])) {
//     $controller->post();
// } else {
//     $controller->index();
// }

if (isset($_GET['action']) && $_GET['action'] == 'add') {
    $controller->post();
} else {
    $controller->index();
}



?>


