<?php

use Dotenv\Dotenv;

require '../vendor/autoload.php'; // Composer autoloader

// Load .env file from the root of your project
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();    



$conn = mysqli_connect($_ENV['servarname'],$_ENV['username'],$_ENV['password'],$_ENV['dbname'],);

if(!$conn){
    die("Connection failed :" .mysqli_connect_error());
}

echo"Connected successfully";


?>


