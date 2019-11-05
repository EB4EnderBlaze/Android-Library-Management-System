<?php
	//In this code we demonstrate insertion of data
	//Declare the variables
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$database = "library";
	//Check if password is correct or not?
	if(!($_POST["empPass"] || $_POST["RePass"] || $_POST["empID"] || $_POST["empName"])){
		echo "Please enter all the fields!!";
		echo "<script>setTimeout(\"location.href = 'employee-signup.html';\",3600);</script>";
	}
	else{
		if($_POST["empPass"] != $_POST["RePass"]){
			echo "Please enter the same password in the second block for password as entered in the first one";
			echo "<script>setTimeout(\"location.href = 'employee-signup.html';\",3600);</script>";
			//header('Location: employee-signup.html'); 	
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
			$sql = "insert into employee(employee_id, name, password) values ('".$_POST["empID"]."', '".$_POST["empName"]."', '".$_POST["empPass"]."')";
			if(mysqli_query($conn, $sql)){
				//echo "Login with your username and password";
    			//sleep(60);
    		//header('Location: employee-login.html');
    			echo "New Employee added";
				echo "<script>setTimeout(\"location.href = 'admin-home.html';\",3600);</script>";
			}else{
    			echo "Error: " . $sql . "<br>" . 	mysqli_error($conn);
    			echo "Sorry, there is some error please try again!";
				echo "<script>setTimeout(\"location.href = 'employee-signup.html';\",3600);</script>";
			}
		mysqli_close($conn);
		}
	}
?>