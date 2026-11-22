<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $tourist_name = $_POST['tourist_name'];
    $guide_name = $_POST['guide_name'];
    $destination = $_POST['destination'];
    $booking_date = $_POST['booking_date']
    
    $sql="INSERT INTO bookings(tourist_name,guide_name,destination,booking_date) VALUES ('$tourist_name','$guide_name','$destination','$booking_date','pending')";
    if ($conn->query($sql)===TRUE){
        header("location:booking_list.php?success=1");
    }
    else{
        echo "Error:" .$sql. "<br>" .$conn->error;
    }
}
?>