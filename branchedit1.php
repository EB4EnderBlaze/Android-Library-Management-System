<?php
	//In this code we demonstrate insertion of data
	//Declare the variables
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$database = "library";
	//Check if password is correct or not?
	if(!($_POST["branchID"])){
		echo "Please enter the branch Id!!";
		echo "<script>setTimeout(\"location.href = 'branchedit1.html';\",3600);</script>";
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
			$ID = $_POST['branchID'];
			//$sql = "EXISTS (select * from 'employee' WHERE id = $_POST["empID"])"
			$sql = "select * from branch where branch_id = '$ID';";
			//$q = "SELECT * FROM entries where id= '1'";
			//$sql = "exits (select * from 'employee' where id = $_POST['empID']);";
			if(mysqli_query($conn, $sql)){
				$result = mysqli_query($conn, $sql);
				$rowcount = mysqli_num_rows($result);
				//echo "$rowcount";
				if($rowcount == '1'){
    				echo "Please enter the new details of the branch";
    				session_start();
					$_SESSION["branch_id"] = $ID;
					echo "<script>setTimeout(\"location.href = 'branchedit2.html';\",3600);</script>";
				}
				else{
					echo "This branch does not exist so insert it!";
					echo "<script>setTimeout(\"location.href = 'branchcreate.html';\",3600);</script>";
				}
			}else{
    			echo "Error: " . $sql . "<br>" . 	mysqli_error($conn);
    			echo "Sorry, there is some error please try again!";
				echo "<script>setTimeout(\"location.href = 'branchedit1.html';\",3600);</script>";
			}
		mysqli_close($conn);
		}
?>