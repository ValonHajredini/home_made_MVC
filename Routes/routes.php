<?php
/**
 * Created by PhpStorm.
 * User: hajre
 * Date: 12/3/2016
 * Time: 5:36 PM
 */
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('endri', ['controller' => 'Posts', 'action' => 'show']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('posts/show', ['controller' => 'Posts', 'action' => 'show']);


$router->add('users', ['controller' => 'Users', 'action' => 'index']);
$router->add('users/show', ['controller' => 'Users', 'action' => 'show']);
$router->add('users/edit', ['controller' => 'Users', 'action' => 'edit']);
$router->add('users/update', ['controller' => 'Users', 'action' => 'update']);
$router->add('users/new', ['controller' => 'Users', 'action' => 'new']);


