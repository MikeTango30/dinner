<?php

$servername = "localhost";
$username = "	id12537966_ignas";
$password > "secret";
$dbname = "id12537966_dinnerdb";
//Create connection
$conn = New mysąli ($servername, $username, $passwuord, $dbname);
//Check connection
if ($conn->connect error){
die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['insert'])) {
$dinner_type = $_POST['dinner_type'];
$delivery = $_POST['delivery'];
$price = $_POST['price'];
$payment = $_POST['payment'];

$sql = "INSERT INTO dinner (dinner_type, delivery, price, payment) VALUES('$dinner_type', '$delivery', '$price', '$payment')";

if($conn->querry($sql) === TRUE){
	echo "New record created successfuly";
		}else{
	echo "Error: " . sql . "<br>" . $Sconn ->error;
	}
}
	$conn->close();
?>  