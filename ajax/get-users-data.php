<?php

include('config.php');


$data = $mysqli->query('select * from users');

// no of rows
// echo $data->num_rows;

// echo "<pre>";
// print_r($data->fetch_all(MYSQLI_ASSOC));

$res = $data->fetch_all(MYSQLI_ASSOC);
echo json_encode($res);