<?php

$host       = "localhost";
$db_name    = 'mvc';
$user       = 'root';
$password   = '';

$conn = new mysqli($host, $user, $password, $db_name);


if ($conn->connect_error){
    echo 'Connection faild: '.$conn->connect_error;
}
//use PDO;
class posts{
    public static function getAll(){
        $host       = "localhost";
        $db_name    = 'mvc';
        $user       = 'root';
        $password   = '';
        try{
            $db = new PDO("mysql:host$host;dbname=$db_name",$user, $password );
            $stmt = $db->prepare('SELECT id, title, content FROM posts ORDER BY created_at');
            // $stmt is some query like "SELECT rowid, username, comment"
            $results = $stmt->fetchAll(PDO::FETCH_GROUP|PDO::FETCH_ASSOC);
            return $results;
        } catch (\PDOException $e){
            echo $e->getMessage();
        }

    }
}
$post = new posts();
$all = $post::getAll();
print_r($all);
