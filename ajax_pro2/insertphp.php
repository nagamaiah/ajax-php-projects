<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','ajax_pro2');

global $connection;
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$connection){
    die('Database connection failed'.mysqli_error($connection));
}

extract($_POST);

if(isset($_POST['submit'])){
    die($username);
    $query = "INSERT INTO ajax_insert (username, password) VALUES ('$username','$password')";
    $insert_data = mysqli_query($connection, $query);
    if(!$insert_data){
        die('Query failed'.mysqli_error($connection));
    }else{
        header("Location: index.php");
    }
}







?>