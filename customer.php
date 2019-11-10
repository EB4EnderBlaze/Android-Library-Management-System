<?php
	//In this code we demonstrate insertion of data
	//Declare the variables
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$database = "library";
	$currentDateTime = date('Y-m-d');
	//Check if password is correct or not?
	if(!($_POST["custPass"] || $_POST["RePass"] || $_POST["custID"] || $_POST["custName"] || $_POST["custAddress"])){
		echo "Please Enter all the fields";
		echo "<script>setTimeout(\"location.href = 'customer-signup.html';\",3600);</script>";
	}
	else{
		if($_POST["custPass"] != $_POST["RePass"]){
			echo "Please enter the same password in the second block for password as entered in the first one";
			echo "<script>setTimeout(\"location.href = 'customer-signup.html';\",3600);</script>";
			
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
			$sql = "insert into customer(customer_id, name, address, regdate, password) values ('".$_POST["custID"]."', '".$_POST["custName"]."', '".$_POST["custAddress"]."','".$currentDateTime."', '".$_POST["custPass"]."')";
			if(mysqli_query($conn, $sql)){
				//echo "Login with your username and password";
	    		//sleep(60);
	    		//header('Location: employee-login.html');
	    		echo "New Customer inserted into the Database";
				echo "<script>setTimeout(\"location.href = 'admin-home.php';\",3600);</script>";
			}else{
	    		echo "Error: " . $sql . "<br>" . 	mysqli_error($conn);
	    		echo "There was some error please try again!";
				echo "<script>setTimeout(\"location.href = 'customer-signup.html';\",3600);</script>";
			}
			mysqli_close($conn);
		}
	}
?>