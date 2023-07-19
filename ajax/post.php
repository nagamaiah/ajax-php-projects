<?php

include('config.php');

// $_POST in PHP will recognize the only the form data (application/x-www-form-urlencoded or multipart/form-data) 
// with a specified content type header.

$_POST = json_decode(file_get_contents('php://input'), true);

$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['yes_no'];

$data = [];
$data['username'] = $username;
$data['password'] = $password;
$data['gender'] = $gender;

$query = "insert into users (name, password, gender) values ('$username', '$password', '$gender')";
$insert = $mysqli->query($query);

echo json_encode($data);
