<?php
namespace App\Controllers;
use \Core\View;
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/26/2016
 * Time: 12:03 AM
 */
class Posts extends \Core\Controller{
    protected function before(){
//        return false;

    }
    protected function after(){

    }
//    Index Action
    public function indexAction(){
//        echo "Hello from Posts index";
//        echo '<br>';
//        echo '<p>Query string parameters: </p>';
//        echo '<pre>'.htmlspecialchars(print_r($_GET, true)).'</pre>';
        $posts = ['post1','post2','post3'];
        View::renderTemplate('Posts/index.html',['posts'=> $posts]);
    }
//    Add new Action
    public function addNewAction(){
        echo "Hello from addNew add new";
    }
    public function editAction(){
        echo 'Hello from edit action in Posts controller'.$this->rout_params['id'].'<br>';
        echo '<p>Route Parameters:<pre>'.htmlspecialchars(print_r($this->rout_params, true)).' </pre>';
    }
    public function showAction(){
        echo 'This is user show';
    }
}