<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn=new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error){die("connection failed:".$conn->connect_error);}
echo"you have manage to connect";


?>