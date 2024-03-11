<?php
require_once '../app/vendor/autoload.php';
require_once "../app/core/Controller.php";
require_once "../app/models/User.php";
require_once "../app/models/Post.php";
require_once "../app/controllers/MainController.php";
require_once "../app/controllers/UserController.php";
require_once "../app/controllers/PostController.php";

use app\controllers\MainController;
use app\controllers\PostController;

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);


$mainController = new MainController();
$postController = new PostController();


switch ($url) {
    case '/posts':
        
        $postController->showPosts();
        break;
    case '/':
        
        $mainController->homepage();
        break;
    default:
        
        $mainController->notFound();
        break;
}
