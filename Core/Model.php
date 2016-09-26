<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 9/26/2016
 * Time: 6:50 PM
 */

namespace Core;
use PDO;
use \App\Config;

abstract class Model{
    protected static function getDB(){
        static $db = null;
        if ($db === null){
            $dbs = 'mysql:host='.Config::DB_HOST.';dbname='.Config::DB_NAME.';charset=utf8';
            $db = new PDO($dbs , Config::DB_USER, Config::DB_PASS);
//            Throw an Exception when error accords
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;

        }
    }
}