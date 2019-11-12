<?php
	session_start();
	//In this code we demonstrate insertion of data
	//Declare the variables
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$database = "library";
	//$ID = $_POST['empID'];
	$ID = $_SESSION['employee_id'];
	$emppassword = $_POST['empPass'];
	$name = $_POST['empName'];
	$salary = $_POST['empSalary'];
	$position = $_POST['empPosition'];
	$conn = mysqli_connect($servername, $username, $password, $database);
	if(!$conn){
		die("connection_failed: ".mysqli_connect_error());
	}
	else{
		echo "Database connected sucessfully";
		echo "<br>";
	}
	//UPDATE `employee` SET `name` = 'pankaj', `salary` = '45000', `position` = 'manager' WHERE CONCAT(`employee`.`employee_id`) = '21' 
	//Check if password is correct or not?
	if(isset($_POST['empPass'])){
		$sql = "update employee set password = '$emppassword' where employee_id = '$ID';";
		mysqli_query($conn, $sql);
	}
	//$sql = "select * from employee where employee_id = '".$_POST['empID']."';";
	if(isset($_POST["empName"])){
		$sql = "update employee set name = '$name' where employee_id = '$ID';";
		mysqli_query($conn, $sql);
	}
	if(isset($_POST["empSalary"])){
		$sql = "update employee set salary = '$Salary' where employee_id = '$ID';";
		mysqli_query($conn, $sql);
	}
	if(isset($_POST["empPosition"])){
		$sql = "update employee set position = '$position' where employee_id = '$ID';";
		mysqli_query($conn, $sql);
	}
	unset($_SESSION["employee_id"]);
	header('location: admin-home.php');
?>