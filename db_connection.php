<?php
$host = "localhost";
$user = "root";
$password = "";
$dbName =  "muranga_db";
//Connect to the db
$connection = mysqli_connect($host , $user, $password, $dbName);
//Check if the connection failed to stop further processes
if (!isset($connection)){
    die("DB connection failed");
}