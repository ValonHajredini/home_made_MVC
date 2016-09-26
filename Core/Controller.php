<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/26/2016
 * Time: 9:56 AM
 */

namespace Core;


abstract class Controller{
    //  PArameters from the match rout;
    protected $rout_params =[];
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

}