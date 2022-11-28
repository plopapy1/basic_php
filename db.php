<?php


$host = "127.0.0.1";
$user = "root";
$password = "";

// Create connection
$conn = new mysqli($host, $user, $password, 'shop');

// Check connection
if ($conn->connect_error){
die("Connection failed: " . $conn->connect_error);
}
echo 'connection successful <br>';

// $sql = "create database shop1";

$hashedPassword = password_hash ('secret', PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, password)  VALUES ('bobo', 'man@gmail.com', '$hashedPassword')";

if($conn->query($sql) == true){
    echo 'database created successfully';
}else {
    echo 'failed to create database' . $conn->error;
}

echo "Connected successfully";

?> 