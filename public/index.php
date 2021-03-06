
<?php
/*
 * Loading the Twig template engine*/
//require '../Core/database_check.php';
//require_once dirname(__DIR__).'/Vendor/Twig/lib/Twig/Autoloader.php';
require_once dirname(__DIR__).'/Vendor/autoload.php';
$loader = new Twig_Loader_Filesystem();
Twig_Autoloader::register($loader);
//$twig = new Twig_Environment($loader);
//$twig->
//  Auto load

spl_autoload_register(function ($class){
    $root = dirname(__DIR__);
    $file = $root.'/'.str_replace('\\', '/', $class) . '.php';
    if(is_readable($file)){
        require $file;
    }
});
error_reporting(E_ALL);
set_error_handler('Core\Error::errorrHandler');
set_exception_handler('Core\Error::exceptionHandler');
/*
 * Inclouding routes */
$router = new Core\Router();
// Add the routes :
$url = $_SERVER['QUERY_STRING'];
//    Added Routs
include_once '../Routes/routes.php';
$router->add('{controller}/{action}');
$router->add('admin/{controller}/{action}',['namespace' =>'Admin']);
$router->add('development/{controller}/{action}',['namespace' =>'Admin']);

$router->add('{controller}/{id:\d+}/{action}');
// Development Tool
$router->add('developmentpanel', ['controller' => 'DevPanels', 'action' => 'index']);
$router->add('developmentpanel/DevPanels/createmodel', ['controller' => 'DevPanels', 'action' => 'createmodel']);

$router->dispatch($url);