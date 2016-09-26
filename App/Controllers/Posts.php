<?php
namespace App\Controllers;
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/26/2016
 * Time: 12:03 AM
 */
class Posts
{
    public function index(){
        echo "Hello from index";
        echo '<br>';
        echo '<p>Query string parameters: </p>';
        echo '<pre>'.htmlspecialchars(print_r($_GET, true)).'</pre>';
    }
    public function addNew(){
        echo "Hello from add new";
    }
}