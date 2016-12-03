<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/26/2016
 * Time: 9:56 AM
 */

namespace Core;
use Core\Router;

abstract class Controller{
    //  PArameters from the match rout;
    protected $rout_params =[];
    protected $all_params = [];
    //    The controller class constructer
    public function __construct($rout_params){
        $this->rout_params = $rout_params;
    }
    public function __call($name, $args){
        $method = $name.'Action';
        if (method_exists($this, $method)){
            if($this->before() !== false){
                call_user_func_array([$this, $method], $args);
                $this->after();
            }

        } else {
//            echo "Method $method not fount in controller ". get_class($this);
            throw new \Exception("Method $method not fount in controller ". get_class($this));
        }

    }
    protected function before(){

    }
    protected function after(){

    }

    public static function redirectTo( $path){

        $web_root = "http://".$_SERVER['HTTP_HOST']."/".$path;
        header("Location:".$web_root);
    }
    public static function path($path){
        echo get_called_class ();
        echo  "http://".$_SERVER['HTTP_HOST']."/$path";
    }
    public static function curPageURL($page) {
        $pageURL = 'http';
//        if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"]."/".$page;
        }
        return $pageURL;
    }
    public function id(){
        return $this->rout_params['id'];
    }
    public function param($key){
        if (isset($_POST)){
            return $_POST[$key];
        }elseif (isset($_GET)){
            return $_GET[$key];

        }

    }
    public function location($path){
        header("Location:".self::curPageURL($path)."");
    }

}