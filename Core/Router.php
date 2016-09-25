<?php

/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/25/2016
 * Time: 11:13 AM
 */
class Router
{
    protected  $routes  = [];
//    Parameters from the match routes
    protected  $params  = [];
    /*
     * Add route to routing table
     * $param array $patam parameters (controller, action, rtc..)
     *
     * @routrn void
     * */
    public function add($route, $params){
        $this->routes[$route] = $params;
    }
    public function getRoutes(){
        return $this->routes;
    }

//    Match the routes to root in the routing table
    public function match ($url){
        foreach($this->routes as $route => $params):
            if($url == $route):
                $this->params = $params;
                return true;
            endif;
        endforeach;
        return false;
    }
    public function getParams(){
        return $this->params;
    }
}