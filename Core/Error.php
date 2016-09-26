<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/26/2016
 * Time: 7:20 PM
 */

namespace Core;


class Error{

    public static function errorrHandler($level, $message, $file, $line){
        if(error_reporting() !== 0){
            throw new \ErrorException($message, 0, $level, $file, $line);
        }
    }
    public static function exceptionHandler($excption){
        echo "<h1>Fatal Error</h1>";
        echo "<p>Uncaught exception: '".get_class($excption)."'</p>";
        echo "<p>Message: '".$excption->getMessage()."'</p>";
        echo "<p>Stack track: <pre>".$excption->getTraceAsString()."</pre>";
        echo "<p>Thrown in '".$excption->getFile()."' on line: ".$excption->getLine()."</p>";
    }
}