<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 12/3/2016
 * Time: 5:41 PM
 */

namespace App\Controllers;
use Core\Controller;
use Core\Model;
use Core\Router;
use \Core\View;
use App\Models\User;

class Users extends \Core\Controller{
    public function indexAction(){
        $users = User::all();
//        echo $this->curPageURL();
        View::render('users/index.php',[
            'users'      =>  $users,
            'Colors'    => ['red', 'green', 'blue']
        ]);

    }
    public function showAction(){
        $user = User::find($this->rout_params['id']);
        View::render('users/show.php',['user'=> $user]);
    }
    public function editAction(){
        $user = User::find($this->rout_params['id']);
        View::render('users/edit.php', ['user' => $user]);

        if (isset($_POST['usernam'])){

            print_r($_POST);
        }
    }
    public function updateAction(){
       if( $updated_user =User::update($this->id(), ['username' => $this->param('username'), 'password' =>$this->param('password')]) == 1 or 1==1){
           $this->location("users/".$this->id()."/show");
       }

    }
    public function newAction(){
        View::render('users/new.php');
    }
    public function createAction(){
        if (isset($_POST['submit'])){
          $newUser=  User::create(['username' => $this->param('username'), 'password' =>$this->param('password')]);
            if ($newUser != 0 ){
                $this->location("users/$newUser/show");
            }
        }
    }
    public function deleteAction(){
        if(User::delete($this->id()) == "1"){
            $this->location("users");
        }
//        echo User::delete($this->id());

    }



//    =================================
    public function returnParamId(){
        $id = $this->rout_params['id'];
        $id = "$id";
        return $id;
        }
}