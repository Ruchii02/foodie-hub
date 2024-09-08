<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$date = $_POST['date'];
$time = $_POST['time'];
$person = $_POST['person'];
$conn = new mysqli('localhost','root','','','rest');
if($conn->connect_error){
    die('connection failed: '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO Booking(firstname,lastname,email,phoneno,date,time,person)
    VALUES(?,?,?,?,?,?,?");
    $stmt->bind_param("sssiiii",$firstname , $lastname, $email, $phoneno, $date, $time, $person);
    $stmt->execute();
    echo "Booking successful..."
    $stmt->close();
    $conn->close();
}
?>