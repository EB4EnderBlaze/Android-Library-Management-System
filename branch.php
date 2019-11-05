<?php
	//In this code we demonstrate insertion of data
	//Declare the variables
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$database = "library";

	//Connect
	if(!($_POST["address"] || $_POST["branchID"] || $_POST["mgrID"])){
		echo "Please enter all the fields";
		echo "<script>setTimeout(\"location.href = 'branchcreate.html';\",3600);</script>";
	}
	else{
		$conn = mysqli_connect($servername, $username, $password, $database);
		if(!$conn){
			die("connection_failed: ".mysqli_connect_error());
		}
		else{
			echo "Database connected sucessfully";
			echo "<br>";
		}
		$sql = "insert into branch(address, branch_id, manager_id) values ('".$_POST["address"]."', '".$_POST["branchID"]."', '".$_POST["mgrID"]."')";
		if(mysqli_query($conn, $sql)){
	    	echo "New branch added sucessfully";
	    	echo "<script>setTimeout(\"location.href = 'admin_home.html';\",3600);</script>";
		}else{
			echo "Due to some unexpected error, the branch was not created Please try again!!";
	    	echo "Error: " . $sql . "<br>" . 	mysqli_error($conn);
	 		echo "<script>setTimeout(\"location.href = 'branchcreate.html';\",3600);</script>";   	
		}
		mysqli_close($conn);
	}
?>