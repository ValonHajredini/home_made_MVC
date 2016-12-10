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
//        echo get_called_class ();
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
    public static function viewLocation($path){
        header("Location:".self::curPageURL($path)."");
    }
    protected function modelTable(array $tables =[]){
        $modelarray = [];
        foreach ($tables as $tbl){
            foreach ($tbl as $t){
                if (is_string($t)){
                    $model = ucfirst(substr($t, 0, -1));
                    $modelarray[$model] = $t;
                }
            }


        }
        return $modelarray;

    }
    public function makeArrayFormat(array $post =[]){
        $table = $post['modelName'];
        $post['modelName'] = ucfirst(substr($post['modelName'], 0, -1));
        $preparetArray = [];
        $fieldNames = [];
        $fieldProperty = [];
//    Gjen tabelen dhe Modelin ne $preparetArray[]
        foreach ($post as $key => $value){
            if ($key == 'tableName' or $key == 'modelName'){
                $preparetArray[$key] = $value;
            }else {
            }

        }
//    Nxjerr tipet the atriputet e kolonave i fut ne $fieldPropertyes[]
        foreach ($post as $key => $value){
            if(( strpos($key, 'type_') !== false) or ( strpos($key, 'require_') !== false) or ( strpos($key, 'maxLength_') !== false)){
                if ($value == 'on'){
                    $value = "TRUE";
                }
                $fieldProperty[$key] = $value;
            }
        }
//    nxjerr emrat e kolonave i fut ne $fieldPropertyesAttr[]
        $preparetArray['tableName'] = $table;
        $preparetArray['numberOfFields'] = $post['fNumber'];

        foreach ($post as $key => $value){
            if (strpos($key, 'field_') !== false){
                $fieldNames[$value] = [];
//
            }else {
            }
        }
        $compFieldName = [];
        $fieldAttr = [];
        for ($i = 1; $i < $post['fNumber']+1; $i++){
            $f = [];
            foreach ($fieldProperty as $key => $value){
                if(( strpos($key, "type_$i") !== false) or ( strpos($key, "require_$i") !== false) or ( strpos($key, "maxLength_$i") !== false)){
                    $key = str_replace("_$i", "", $key);
                    $f[$key] = $value;
                }
            }
//        print_r($f);
            $compFieldName[$post["field_$i"]] = $f;
            $fieldAttr["field_".$i] = [$f];
        }
        $preparetArray['fields'] = $compFieldName;


//    print_r($preparetArray);


        return $preparetArray;
    }
    function writeArray($createTable){
        $contenr = "<?php \n /*This is for creating users Table */\n \$createTable = [\n";

        $flevel = 0;
        foreach ($createTable as $key =>$value){
            $contenr .= "\t'$key' =>";
            if (!is_array($value)){
                $contenr .= " '$value', \n";
            }else {
                $contenr .= "\t [ \n";
                $countFields = 1;
                $fields = count($value);
                foreach ($value as $key2 => $value2){
                    if (!is_array($value2)){
                    } else {
                        $contenr .= "\t\t'$key2' => [ ";
                        $countFields2 = 1;
                        $fields2 = count($value2);
                        foreach ($value2 as $key3 => $value3){
                            if ($fields2 > $countFields2){
                                $contenr .= "'$key3' => '$value3',";
                            }else {
                                $contenr .= "'$key3' => '$value3'";
                            }
                            $countFields2++;
                        }
                        if ($fields > $countFields){
                            $contenr .= " ],\n";
                        }else {
                            $contenr .= " ]\n";
                        }
                    }
                    $countFields++;
                }
                $contenr .= " \t]";
            }
            $flevel++;
        }
        $contenr  .= "\n]; \n";
        $fp = fopen("../Database/Migration/".time()."_" .$createTable['modelName'].".php", "w") or die("Unable to open file!");
        fwrite($fp,$contenr);
        fclose($fp);


    }

}