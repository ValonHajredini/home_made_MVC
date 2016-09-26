<?php
namespace App\Controllers;
use \Core\View;
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/26/2016
 * Time: 12:26 AM
 */
class Home extends \Core\Controller {
    protected function before(){
//        echo "(before)";
    }
    protected function after(){
//        echo '<br>(after)';
    }
    public function indexAction(){
        View::render('Home/index.php');
    }


}