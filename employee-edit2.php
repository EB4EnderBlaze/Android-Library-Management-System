<?php
	//In this code we demonstrate insertion of data
	//Declare the variables
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$database = "library";
	$conn = mysqli_connect($servername, $username, $password, $database);
	if(!$conn){
		die("connection_failed: ".mysqli_connect_error());
	}
	else{
		echo "Database connected sucessfully";
		echo "<br>";
	}
	//Check if password is correct or not?
	if(isset($_POST["empPass"])){
		$sql = "update 'employee' set password = '".$_POST['empPass']."' where employee_id = '".$_POST['empID']."';";
		mysqli_query($conn, $sql);
	}
	//$sql = "select * from employee where employee_id = '".$_POST['empID']."';";
	if(isset($_POST["empName"])){
		$sql = "update 'employee' set name = '".$_POST['empName']."' where employee_id = '".$_POST['empID']."';";
		mysqli_query($conn, $sql);
	}
	if(isset($_POST["empSalary"])){
		$sql = "update 'employee' set salary = '".$_POST['empSalary']."' where employee_id = '".$_POST['empID']."';";
		mysqli_query($conn, $sql);
	}
	if(isset($_POST["empPosition"])){
		$sql = "update 'employee' set position = '".$_POST['empPosition']."' where employee_id = '".$_POST['empID']."';";
		mysqli_query($conn, $sql);
	}
	header('location: admin-home.php');
?>