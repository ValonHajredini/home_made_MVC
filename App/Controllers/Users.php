<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/26/2016
 * Time: 10:50 AM
 */

namespace App\Controllers;


class Users extends \Core\Controller{
    protected function before(){
        echo "(before)<br>";
//        return false;

    }
    protected function after(){
        echo '(after)';
    }
    public function indexAction(){
        echo 'This is for users';
    }

}