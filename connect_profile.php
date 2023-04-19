<?php
   $name = $_POST["name"];
   $email = $_POST["email"];
   $address = $_POST["address"];
   $age = $_POST["age"];
   $pno = $_POST["pno"];
   $blood = $_POST["blood"];
   
   
   //database connection
   $conn = new mysqli('localhost','root','','group_bbms');
   if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
   }else{
    $stmt = $conn->prepare("insert into profile(name, email, address, age, pno, blood) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiis",$name, $email, $address, $age, $pno, $blood);
    $stmt->execute();
    echo "registeration successful....";
    $stmt->close();
    $conn->close();
    header('Location:profile.php');

   }

?>