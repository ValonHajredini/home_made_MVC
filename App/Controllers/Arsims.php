<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/26/2016
 * Time: 9:48 PM
 */

namespace App\Controllers;


class Arsims
{
    protected function before(){
//        echo "(before)";
    }
    protected function after(){
//        echo '<br>(after)';
    }
    public function indexAction(){
        echo 'ARsimi';
    }
    public function showAction(){

    }
}