<?php
	//In this code we demonstrate insertion of data
	//Declare the variables
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$database = "library";
	//Check if password is correct or not?
	if(!($_POST["custID"])){
		echo "Please enter the customer id!!";
		echo "<script>setTimeout(\"location.href = 'customer-delete.html';\",3600);</script>";
	}
	else{
			//Connect
			$ID = $_POST['custID'];
			$conn = mysqli_connect($servername, $username, $password, $database);
			if(!$conn){
				die("connection_failed: ".mysqli_connect_error());
			}
			else{
				echo "Database connected sucessfully";
				echo "<br>";
			}
			//$sql = "EXISTS (select * from 'employee' WHERE id = $_POST["empID"])"
			$sql = "select * from customer where customer_id = '$ID';";
			//$q = "SELECT * FROM entries where id= '1'";
			//$sql = "exits (select * from 'employee' where id = $_POST['empID']);";
			if(mysqli_query($conn, $sql)){
				$result = mysqli_query($conn, $sql);
				$rowcount = mysqli_num_rows($result);
				//echo "$rowcount";
				if($rowcount == '1'){
    				echo "Deleting the customer";
    				$sql = "delete from customer where customer_id = '$ID';";
					$result = mysqli_query($conn, $sql);
					echo "<script>setTimeout(\"location.href = 'admin-home.php';\",3600);</script>";

				}
				else{
					echo "This customer does not exist so insert it!";
					echo "<script>setTimeout(\"location.href = 'admin-home.php';\",3600);</script>";
				}
			}else{
    			echo "Error: " . $sql . "<br>" . 	mysqli_error($conn);
    			echo "Sorry, there is some error please try again!";
				echo "<script>setTimeout(\"location.href = 'customer-delete.html';\",3600);</script>";
			}
		mysqli_close($conn);
		}
?>