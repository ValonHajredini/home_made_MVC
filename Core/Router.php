<?php
namespace Core;

/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/25/2016
 * Time: 11:13 AM
 */
class Router
{
    public  $routes  = [];
//    Parameters from the match routes
    public  $params  = [];
    /*
     * Add route to routing table
     * $param array $patam parameters (controller, action, rtc..)
     *
     * @routrn void
     * */
    public function add($route, $params = []){
        $route = preg_replace('/\//','\\/', $route);
        $route = preg_replace('/\{([a-z]+)\}/','(?P<\1>[a-z-]+)', $route);
        $route = preg_replace('/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)', $route);
        $route = '/^'.$route.'$/i';
        $this->routes[$route] = $params;

    }
    public function getRoutes(){
        return $this->routes;
    }

//    Match the routes to root in the routing table
    public function match ($url){
//        foreach($this->routes as $route => $params):
//            if($url == $route):
//                $this->params = $params;
//                return true;
//            endif;
//        endforeach;
//        $reg_ex = '/^(?P<Controller>[a-z-]+)\/(?P<Action>[a-z-]+$)/';
        foreach ($this->routes as $route => $params){
            if(preg_match($route, $url, $matches)) {
                //        Het named capture
//                $params = [];
                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        $params[$key] = $match;
                    }
                }
                $this->params = $params;
                return true;
            }
        }
        return false;
    }
    public function getParams(){
        return $this->params;
    }

    public function dispatch($url){
        if($this->match($url)){
            $controller = $this->params['controller'];
            $controller = $this->convertToStudlyCaps($controller);
            $controller = 'App\Controllers\\'.$controller;

//            $controller = 'Posts';

            if(class_exists($controller)){
                $controller_object = new $controller;

                $action = $this->params['action'];
                $action = $this->ConvertToCamelCase($action);

                if(is_callable([$controller_object, $action])){
                    $controller_object->$action();
                } else {
                    echo "Method $action (in controller $controller ) not found";
                }
            } else {
                echo "Controller Class $controller not found";
            }
        } else {
            echo "No rout found";
        }
    }
    protected function convertToStudlyCaps($controller){
        return str_replace(' ', '', ucwords(str_replace('-',' ', $controller)));
    }
    protected function ConvertToCamelCase($action){
        return lcfirst($this->convertToStudlyCaps($action));
    }

}