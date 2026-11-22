<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOS"]=="POST"){
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $result =$conn->query("SELECT * FROM users WHERENemail='$email'");

    if ($result->num_rows == 1){
        $user = $result->fetch_asscoc();
        if (password_verify($pass,$user['pass'])){
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['role']  = $user['role'];
            //redirect to the dashboard after the successful login
            header("location: booking.html");
            exit();
        }}
        echo "invalid email or password." <a href="login.html">Try again</a>   
}
?>