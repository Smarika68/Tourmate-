<?php
$host="local";
$username="root";
$pass="";
$database="tourmate"
$conn= new mysqli($host,$username,$pass,$database);
if ($conn->connect_error){
    die "Database connection failed:" . $conn->connect_error;
}
?>