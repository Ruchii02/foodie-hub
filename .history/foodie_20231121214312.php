<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phoneno = $_POST['phoneno'];
$date = $_POST['date'];
$time = $_POST['time'];
$person = $_POST['person'];
$conn = new mysqli('localhost','root','','rest');
if($conn->foodie_error){
    die('connection failed: '.$conn->foodie_error);
}else{
    $stmt = $conn->prepare("insert into Booking(firstname,lastname,email,phoneno,date,time,person)
    values(?,?,?,?,?,?,?");
    $stmt->bind_param("sssiiii",$firstname , $lastname, $email, $phoneno, $date, $time, $person);
    $stmt->execute();
    echo "Booking successful..."
    $stmt->close();
    $conn->close();
}
?>