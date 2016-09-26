<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/26/2016
 * Time: 1:40 PM
 */

namespace Core;


class View
{
    public static function render($view){
        $file = "../App/Views/$view";
        if(is_readable($file)){
            require $file;
        } else {
            echo "$file not found";
        }

    }

}