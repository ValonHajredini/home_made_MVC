<?php

//echo 'Requisted URL = "'. $_SERVER['QUERY_STRING']. '"';
//require '../App/Controllers/Posts.php';
//require '../App/Controllers/Home.php';
//// Router Require
//require '../Core/Router.php';
spl_autoload_register(function ($class){
    $root = dirname(__DIR__);
    $file = $root.'/'.str_replace('\\', '/', $class) . '.php';
    if(is_readable($file)){
        require $file;

    }
});
//require '../Core/Router.php';
$router = new Core\Router();
//echo get_class($router);

// Add the routes :
$url = $_SERVER['QUERY_STRING'];


$router->add('', ['controller' => 'Home', 'action' => 'index']);
//$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
//$router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);
$router->add('{controller}/{action}');
//$router->add('admin/{action}/{controller}');
$router->add('{controller}/{id:\d+}/{action}');



//echo '<pre>';
////    var_dump($router->getRoutes());
//echo htmlspecialchars(print_r($router->getRoutes(), true));
//echo '</pre>';
//
////echo $url.'<br>';
//
//echo "-----------------------------------------<br>";

//    echo $url.'<br>';
//    if($router->match($url)):
//        echo '<pre>';
//        print_r($router->getParams());
//        echo '</pre>';
//
//    else:
//        echo "Not a valide root <br>";
//    endif;

//foreach ($router->routes as $key=> $value):
//    echo '<pre>';
//echo 'Key=> '.$key.', Params: ';
//    print_r($value);
//    echo '</pre>';
//
//endforeach;
//print_r($router->params);

$router->dispatch($url);
