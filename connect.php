<?php
   $pno = $_POST["pno"];
   $pass = $_POST["password"];
   $dob = $_POST["dob"];
   $d=explode('-',$dob);
   $date=$d[2];
   $month=$d[1];
   $year=$d[0];
   $new=$date.'-'.$month.'-'.$year;

   //database connection
   $conn = new mysqli('localhost','root','','group_bbms');
   if($conn->connect_error){
    die('Connection failed : '.$conn->connect_error);
   }else{
    $stmt = $conn->prepare("insert into admin(uname, pass, dob) values(?, ?, ?)");
    $stmt->bind_param("sss",$pno, $pass, $new);
    $stmt->execute();
    echo "registeration successful....";
    $stmt->close();
    $conn->close();
    header('Location:login.php');

   }

?>