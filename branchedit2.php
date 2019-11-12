<?php
	session_start();
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
	echo "Current session is  " . $_SESSION["branch_id"] . ".<br>";
	$ID = $_SESSION['branch_id'];
	//UPDATE `employee` SET `name` = 'pankaj', `salary` = '45000', `position` = 'manager' WHERE CONCAT(`employee`.`employee_id`) = '21' 
	//Check if password is correct or not?
	if(isset($_POST['managerID'])){
		$mgrID = $_POST['managerID'];
		$sql = "update branch set manager_id = '$mgrID' where branch_id = '$ID';";
		mysqli_query($conn, $sql);
		echo "In managerID";
	}
	//$sql = "select * from employee where employee_id = '".$_POST['empID']."';";
	if(isset($_POST["branchAddress"])){
		$address = $_POST['branchAddress'];
		$sql = "update branch set address = '$address' where branch_id = '$ID';";
		mysqli_query($conn, $sql);
		echo "In branch address";
	}
	//header('location: admin-home.php');
?>