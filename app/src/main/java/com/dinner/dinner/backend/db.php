<?php
	$username="epiz_252480";
	$password="";//password
	$servername="sql304.epizy.com";
	$database="epiz_252480_db";

	//Create connection
	$conn = new mysqli ($servername, $username, $password, $database);

	//Check connection
	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}

	$veiksmas = $_POST['action'];
	if (!strcmp("insert", $veiksmas)) {
		$dinner_type = $_POST['dinner_type'];
		$delivery = $_POST['delivery'];
		$price = $_POST['price'];
		$payment = $_POST['payment'];

		$sql = "INSERT INTO dinner (dinner_type, delivery, price, payment) VALUES ('$dinner_type', '$delivery', '$price', '$payment')";
		if($conn->query($sql) === TRUE){
			echo "New entry created successfully";
		}else{
			echo "Error creating new entry " . $sql . "<br>" . $conn ->error;
		}
	}
	$conn->close();
?>