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
}