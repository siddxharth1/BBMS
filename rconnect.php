<?php
	$name = $_POST['name'];
	$address = $_POST['address'];
    $age = $_POST['age'];
	$email = $_POST['email'];
	$blood = $_POST['blood'];

	// Database connection
	$conn = new mysqli('localhost','root','','group_bbms');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into request(name, address, age, email, blood) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiss", $name, $address, $age, $email, $blood);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
		header('Location:home.php');
	}
?>