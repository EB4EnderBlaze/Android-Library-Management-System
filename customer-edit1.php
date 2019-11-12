<?php
	//In this code we demonstrate insertion of data
	//Declare the variables
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$database = "library";
	//Check if password is correct or not?
	if(!($_POST["custID"])){
		echo "Please enter the customer Id!!";
		echo "<script>setTimeout(\"location.href = 'customer-edit1.html';\",3600);</script>";
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
			$ID = $_POST['custID'];
			//$sql = "EXISTS (select * from 'employee' WHERE id = $_POST["empID"])"
			$sql = "select * from customer where customer_id = '$ID';";
			//$q = "SELECT * FROM entries where id= '1'";
			//$sql = "exits (select * from 'employee' where id = $_POST['empID']);";
			if(mysqli_query($conn, $sql)){
				$result = mysqli_query($conn, $sql);
				$rowcount = mysqli_num_rows($result);
				//echo "$rowcount";
				if($rowcount == '1'){
					//echo "<html>";
					//echo "<form action = 'customer-edit2.html' method = 'post'>";
					//echo "<input type = 'hidden' name = 'custID' value = $ID>";
					//echo "</form>";
					//echo "</html>";
    				echo "Please enter the new details of the customer";
    				session_start();
					$_SESSION["customer_id"] = $ID;
					echo "<script>setTimeout(\"location.href = 'customer-edit2.html';\",3600);</script>";
				}
				else{
					echo "This employee does not exist so insert it!";
					echo "<script>setTimeout(\"location.href = 'customer-signup.html';\",3600);</script>";
				}
			}else{
    			echo "Error: " . $sql . "<br>" . 	mysqli_error($conn);
    			echo "Sorry, there is some error please try again!";
				echo "<script>setTimeout(\"location.href = 'customer-edit1.html';\",3600);</script>";
			}
		mysqli_close($conn);
		}
?>