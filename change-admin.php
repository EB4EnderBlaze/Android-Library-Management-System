<?php
	session_start();
	//In this code we demonstrate insertion of data
	//Declare the variables
	
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$database = "library";
	$current_id = $_SESSION['admin_id'];
	//Check if password is correct or not?
	if(!($_POST["adminPass"] || $_POST["adminID"])){
		echo "Please enter all the fields!!";
		echo "<script>setTimeout(\"location.href = 'employee-signup.html';\",3600);</script>";
	}
	else{
			//Connect
			$conn = mysqli_connect($servername, $username, $password, $database);
			if(!$conn){
				die("connection_failed: ".mysqli_connect_error());
			}
			else{
				echo "Database connected sucessfully";
				echo "<br>";
			}
			$sql = "delete from admin where id = $current_id";
			mysqli_query($conn, $sql);
			$sql = "insert into admin(id, password) values ('".$_POST["adminID"]."',  '".$_POST["adminPass"]."')";
			if(mysqli_query($conn, $sql)){
    			echo "Credentials of admin changed successfully";
    			$_SESSION['admin_id'] = $_POST["adminID"];
				echo "<script>setTimeout(\"location.href = 'admin-home.php';\",3600);</script>";
			}else{
    			echo "Error: " . $sql . "<br>" . 	mysqli_error($conn);
    			echo "Sorry, there is some error please try again!";
				echo "<script>setTimeout(\"location.href = 'change-admin.html';\",3600);</script>";
			}
		mysqli_close($conn);
		}
?>