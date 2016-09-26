<?php
//  Auto load
spl_autoload_register(function ($class){
    $root = dirname(__DIR__);
    $file = $root.'/'.str_replace('\\', '/', $class) . '.php';
    if(is_readable($file)){
        require $file;
    }
});
$router = new Core\Router();
// Add the routes :
$url = $_SERVER['QUERY_STRING'];

//    Added Routs
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('all-users', ['controller' => 'Users', 'action' => 'index']);
//$router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);
$router->add('{controller}/{action}');
//$router->add('admin/{action}/{controller}');
$router->add('{controller}/{id:\d+}/{action}');
//    Dispach url and Create automaticly object based on controller and action
$router->dispatch($url);