<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn=new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error){die("connection failed:".$conn->connect_error);}
echo"you have manage to connect";

$sql="CREATE DATABASE kalonda";
if($conn->query($sql)===True)
{echo"database created";}
else{echo"error creating database:".$conn->error;}
$conn->close();
?>