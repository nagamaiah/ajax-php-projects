<?php 

    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','ajax_pro');

    global $connection;
    $connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(!$connection){
        die('Database connection failed'.mysqli_error($connection));
    }


    $degree_id = $_POST['datapost'];

    $query = "SELECT * FROM classes WHERE m_id = '$degree_id' ";

    $show_class = mysqli_query($connection, $query);

    while( $row = mysqli_fetch_assoc($show_class)){
        $class = $row['class'];
        echo "<option value='{$class}'>{$class}</option>";
    }



?>