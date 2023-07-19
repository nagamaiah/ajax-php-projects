<?php

  
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','ajax_countries');

    global $connection;
    $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(!$connection){
        die('Database connection failed'.mysqli_error($connection));
    }

    $query = "SELECT * FROM countries";
    $result = mysqli_query($connection, $query);
    $json_array = array();
    while($row = mysqli_fetch_assoc($result)){
        $json_array[] = $row;
    }

    print(json_encode($json_array));
   



?>