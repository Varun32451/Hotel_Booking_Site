<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "booking inquery";
$conn = new mysqli($servername,$username,$password,$dbanme);

if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);

}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["Name"];
    $contact_details = $_POST["Contact-Details"];
    $check_in = $_POST["Check-in"];
    $check_out = $_POST["Check-out"];

    $sql = "INSERT INTO `booking inquery`(`Name`, `Contact-Details`, `Check-in`, `Check-out`)
     VALUES ('$name','$contact_details','$check_in',' $check_out')";
     if($conn->query($sql) == TRUE){
        echo "Booking Successfully";
     }else{
        echo "Error: " .$sql . "<br>" .$conn->error; 
     }
}
$conn->close();

?>