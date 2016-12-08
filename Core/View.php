<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/26/2016
 * Time: 1:40 PM
 */

namespace Core;
use Core\Assets;
class View extends Assets{

    public static function render($view, $arg = []){
        extract($arg, EXTR_SKIP);
        $file = "../App/Views/$view";
        if(is_readable($file)){
            require $file;
        } else {
            throw new \Exception("$file not found");
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
    public static function style($path){
       return  View::stylePath($path);
    }
    public static function script($path){
       return  View::scriptPath($path);
    }
    public static function img($path){
       return  View::imgPath($path);
    }
    public static function plugin($path){
       return  View::pluginPath($path);
    }


}