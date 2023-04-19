<?php
	$name = $_POST['name'];
	$address = $_POST['address'];
    $age = $_POST['age'];
	$email = $_POST['email'];
	$blood = $_POST['blood'];
    $medical_history = $_POST['medical_history'];
    $comment = $_POST['comment'];

	// Database connection
	$conn = new mysqli('localhost','root','','group_bbms');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into donate(name, address, age, email, blood, medical_history, comment) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssissss", $name, $address, $age, $email, $blood, $medical_history, $comment);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
		header('Location:home.php');
	}
?>