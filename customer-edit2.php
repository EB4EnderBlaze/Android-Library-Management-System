<?php
	session_start();
	//In this code we demonstrate insertion of data
	//Declare the variables
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$database = "library";
	//$ID = $_POST['custID'];
	$custpassword = $_POST['custPass'];
	$name = $_POST['custName'];
	$booksissued = $_POST['custBooksIssued'];
	$fine = $_POST['custFine'];
	$address = $_POST['custAddress'];
	$conn = mysqli_connect($servername, $username, $password, $database);
	if(!$conn){
		die("connection_failed: ".mysqli_connect_error());
	}
	else{
		echo "Database connected sucessfully";
		echo "<br>";
	}
	echo "Current session is  " . $_SESSION["customer_id"] . ".<br>";
	//UPDATE `employee` SET `name` = 'pankaj', `salary` = '45000', `position` = 'manager' WHERE CONCAT(`employee`.`employee_id`) = '21' 
	//Check if password is correct or not?
	$ID = $_SESSION["customer_id"];
	if(isset($_POST['custFine'])){
		$sql = "update customer set fine = '$fine' where customer_id = '$ID';";
		mysqli_query($conn, $sql);
	}
	//$sql = "select * from employee where employee_id = '".$_POST['empID']."';";
	if(isset($_POST["custName"])){
		$sql = "update customer set name = '$name' where customer_id = '$ID';";
		mysqli_query($conn, $sql);
	}
	if(isset($_POST["custBooksIssued"])){
		$sql = "update customer set books_issued = '$booksissued' where customer_id = '$ID';";
		mysqli_query($conn, $sql);
	}
	if(isset($_POST["custAddress"],)){
		$sql = "update customer set address = '$address' where customer_id = '$ID';";
		mysqli_query($conn, $sql);
	}
	if(isset($_POST['custPass']) ){
		$sql = "update customer set password = '$custpassword' where customer_id = '$ID';";
		mysqli_query($conn, $sql);
	}
	unset($_SESSION["customer_id"]);
	header('location: admin-home.php');
?>