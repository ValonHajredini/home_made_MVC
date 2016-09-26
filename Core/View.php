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

    public static function render($view, $arg = []){
        extract($arg, EXTR_SKIP);
        $file = "../App/Views/$view";
        if(is_readable($file)){
            require $file;
        } else {
            echo "$file not found";
        }

    }
    public static function renderTemplate($template, $args =[]){
    static $twig = null;
    if ($twig === null){
        $load = new \Twig_Loader_Filesystem('../App/Views');
        $twig = new \Twig_Environment($load);
    }
    echo $twig->render($template, $args);
}

}