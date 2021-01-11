<?php
$servername = "localhost";
$username = "root";
$password = "";
$name_database = 'belajarphp';

//create connection
$conn = new mysqli($servername, $username, $password, $name_database);

//check connection
    if($conn ->connect_error){
    die("connection failed: ".$conn->connect_error);


}
echo "connected successfully";
?>
