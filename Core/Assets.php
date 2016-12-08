<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 12/4/2016
 * Time: 4:46 PM
 */

namespace Core;


class Assets{
    public static function stylePath($path){
        $root = "Assets/Style/".$path;
        echo $root;
    }
    public static function scriptPath($path){
        $root = "Assets/Javascript/".$path;
        echo $root;
    }
    public static function imgPath($path){
        $root = "Assets/Images/".$path;
        echo $root;
    }
    public static function pluginPath($path){
        $root = "Assets/plugins/".$path;
        echo $root;
    }


}