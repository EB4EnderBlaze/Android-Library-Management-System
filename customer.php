<?php
	//In this code we demonstrate insertion of data
	//Declare the variables
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$database = "library";

	//Connect
	$conn = mysqli_connect($servername, $username, $password, $database);
	if(!$conn){
		die("connection_failed: ".mysqli_connect_error());
	}
	else{
		echo "Database connected sucessfully";
		echo "<br>";
	}
	$sql = "insert into customer(customer_id, name, address, regdate ,password) values ('".$_POST["custID"]."', '".$_POST["custName"]."', '".$_POST["custAddress"]."', '".$_POST["custRegDate"]."', '".$_POST["custPass"]."')";
	if(mysqli_query($conn, $sql)){
    	echo "New record created successfully";
    	include 'homepage.html';
	}else{
    	echo "Error: " . $sql . "<br>" . 	mysqli_error($conn);
	}
	mysqli_close($conn);
?>