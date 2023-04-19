<?php
   $subs = $_POST["subscribe"];
   
   //database connection
   $conn = new mysqli('localhost','root','','group_bbms');
   if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
   }else{
    $stmt = $conn->prepare("insert into subscribers(subs) values(?)");
    $stmt->bind_param("s",$subs);
    $stmt->execute();
    echo "registeration successful....";
    $stmt->close();
    $conn->close();
    header('Location:home.php');

   }

?>