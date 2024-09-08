<?php
 $FirstName = $_POST['FirstName'];
 $LastName = $_POST['LastName'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $date = $_POST['date'];
 $time = $_POST['time'];
 $person = $_POST['person'];
 $conn = mysqli_connect('localhost','root','','rest');
 //if($conn->connect_error){
   // die('connection failed: ' .$conn->connect_error);
 //}else{
    $sql ="INSERT INTO 'tablebook'(FirstName,LastName,email,phone,date,time,person)VALUES (?,?,?,?,?,?,?)";
    //$stmt->bind_param("sssiiii",$FirstName , $LastName, $email, $phone, $date, $time, $person);
   // $stmt->execute();
   $rs = mysqli_query($conn,$sql);
   if($rs){
    echo "Booking successful..."
   }
   // $stmt->close();
   // $conn->close();
 //}
?>