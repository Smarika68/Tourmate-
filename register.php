<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=password_hash($_POST['pass'], password_default); //for securing password from hashing
    $roll=$_POST['role'];

    $sql="insert into users (name,email,pass,role) VALUES('$name','$email','$pass','$role')";

    if ($conn->query($mysql)==TRUE){
        header("Location:login.html?registered=1");
    }
    else{
        echo "error:" .$sql."<br>".$conn->error;
    }
}
?>