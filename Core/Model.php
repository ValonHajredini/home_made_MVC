<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/26/2016
 * Time: 6:50 PM
 */

namespace Core;
use PDO;

abstract class Model{
    protected static function getDB(){
        static $db = null;
        if ($db === null){
            $host       = "localhost";
            $db_name    = 'mvc';
            $user       = 'root';
            $password   = '';
            try {
                $db = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8", $user, $password);
                return $db;
            } catch (\PDOException $e){
                echo $e->getMessage();
            }
        }
    }
}