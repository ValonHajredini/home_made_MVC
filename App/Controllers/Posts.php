<?php
namespace App\Controllers;
use Core\Model;
use Core\Router;
use \Core\View;
use App\Models\Post;
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/26/2016
 * Time: 12:03 AM
 */
class Posts extends \Core\Controller{
    protected function before(){
//        return false;
        $user =2;

        echo "(Before)";
        if ($user != 2){
            echo "User not loged in";
            return false;
        }

    }
    protected function after(){
        echo "(after)";
    }
//    Index Action
    public function indexAction(){
        $dbPosts = Post::all();
        View::renderTemplate('Posts/index.html',['posts'=> $dbPosts]);
//        View::render('Posts/index.php',['posts'=> $dbPosts]);
    }
//    Add new Action
    public function addNewAction(){
        echo "Hello from addNew add new";
    }
    public function editAction(){
//        echo 'Hello from edit action in Posts controller'.$this->rout_params['id'].'<br>';
//        echo '<p>Route Parameters:<pre>'.htmlspecialchars(print_r($this->rout_params, true)).' </pre>';

    }
    public function showAction(){
//        print_r();
        $params = $_GET;
        $record = Post::find($params['a']);
        View::render('Posts/show.php',['post'=> $record, 'params' => $params ]);
    }

}