<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 12/4/2016
 * Time: 9:14 PM
 */

namespace App\Models;
use Core\Model;


class DevPanel extends Model{
    public static function  createTableAndModel($postParams){

        print_r($postParams);



        if (Model::ifExistsModel($postParams['modelName']) != false){


            return false;
            echo " return false ";

        }else {
            echo " return true ";
        }


        $fields = ['testfield'];
        $types = ['testtype'];
//print_r($_GET);
        foreach ($postParams as $key =>$params ){
            if (strpos($key, 'field') !== false){
                $fields[] = $params ;
            }elseif (strpos($key, 'type') !== false){
                $types[] = $params ;
            }
        }
        echo "<br>";
        print_r($postParams);
        echo "<br>";

        print_r($fields);
        echo "<br>";
        print_r($types);
        echo "<br>";
        $preparedField = [];
        for ($i = 0; $i <= $postParams['fNumber']; $i++){
            $preparedField[$fields[$i]] = $types[$i];
        }

        if(DevPanel::createModel($postParams['modelName'],$preparedField)){

//                ========================================================
            $model = $postParams['modelName'];
//            =================================
            $model =substr($model, 0, -1);
            $model = ucfirst($model);
//            =================================

            $dir = explode('\\', dirname(__FILE__));
            $directory = [];
//                print_r($dir);
            foreach ($dir as $d){
                if($d != 'Controllers'){
                    $directory[] = $d ;
                }
            }
            $dir = implode('\\', $directory);
            $dirname = $dir."\\";

            $content = "<?php namespace App\\Models;

use Core\\Model;
/*".$postParams['commentMod']."*/
class $model extends Model{

}";

            $fp = fopen($dirname. "".$model.".php","wb");
            fwrite($fp,$content);
            fclose($fp);

//                ========================================================

        }else {
            echo "Error";
        }
    }


}