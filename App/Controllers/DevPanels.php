<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 12/4/2016
 * Time: 9:15 PM
 */

namespace App\Controllers;

use Core\Controller;
use Core\Model;
use Core\Router;
use \Core\View;
use App\Models\DevPanel;

class DevPanels extends Controller{
        public function indexAction(){
            $modles = Model::models();
            $modles = $this->modelTable(Model::models());

            View::render('DevPanels/index.php', ['models' => $modles]);
        }
        public function createmodelAction(){
            print_r($_POST);
            echo "<br>";
            DevPanel::createTableAndModel($_POST);

            $this->location("developmentpanel");
        }


}