<?php


$servarname = "localhost";
$username = "root";
$password = "";
$dbname= "FootballDB";


//create connection

$conn = mysqli_connect($servarname, $username, $password,$dbname);

if(!$conn){
    die("Connection failed :" .mysqli_connect_error());
}

echo"Connected successfully";


?>


