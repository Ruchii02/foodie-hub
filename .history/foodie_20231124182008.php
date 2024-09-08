<?php
 $FirstName = $_POST['FirstName'];
 $LastName = $_POST['LastName'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $date = $_POST['date'];
 $time = $_POST['time'];
 $person = $_POST['person'];
 $conn = new mysqli_connect("localhost","root","","rest");
 if($conn->connect_error){
    die('connection failed: ' .$conn->connect_error);
 }else{
    $stmt = $conn->prepare("insert into  booking(FirstName,LastName,email,phone,date,time,person)
    values(?,?,?,?,?,?,?");
    $stmt->bind_param("sssiiii",$FirstName , $LastName, $email, $phone, $date, $time, $person);
    $stmt->execute();
    echo "Booking successful..."
    $conn->close();
 }
?>