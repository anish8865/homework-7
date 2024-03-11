namespace app\controllers;
use app\core\Controller;
use app\models\Post;

class PostController extends Controller
{
    public function getPosts() {
        
        $posts = Post::getAll();
        return $posts;
    }

    public function showPosts() {
        $posts = $this->getPosts();
        $template = $this->twig->load('posts.twig');
        echo $template->render(['posts' => $posts]);
    }
}
