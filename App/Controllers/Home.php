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
        $name = 'Ekoloni';
//        View::render('Home/index.php', [
//            'name'      =>  $name,
//            'Colors'    => ['red', 'green', 'blue']
//        ]);
        View::renderTemplate('Home/index.html',[
            'name'      =>  $name,
            'Colors'    => ['red', 'green', 'blue']
        ]);
    }


}