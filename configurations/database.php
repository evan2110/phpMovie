<?php
    //PDO
    define('DATABASE_SERVER', 'localhost');
    define('DATABASE_USER', 'root');
    define('DATABASE_PASSWORD', 'root');
    define('DATABASE_NAME', 'moviedb');
    $connection = null;

    try{
        $connection = new PDO(
            'mysql:host='.DATABASE_SERVER.';dbname='.DATABASE_NAME, DATABASE_USER, DATABASE_PASSWORD
        );
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
    }catch(PDOException $e){
        //echo "Connected failed: " .$e->getMessage();
        $connection = null;
    }
?>