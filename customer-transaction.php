<?php
	session_start();
	echo "Your id is " . $_SESSION['customer_id'] . ".<br>";
	//In this code we demonstrate insertion of data
	//Declare the variables
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$database = "library";
    $currentDateTime = date('Y-m-d');
    //echo $currentDateTime;
	//Connect
	if(!($_POST["transID"] || $_POST["bookID"] || $_POST["branchID"] || $_POST["transtype"])){
		echo "Please enter all the values";

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
		$sql = "insert into transaction_status(trans_id, book_id, customer_id, branch_id, issue, trans_date) values ('".$_POST["transID"]."', '".$_POST["bookID"]."', '".$_SESSION["customer_id"]."', '".$_POST["branchID"]."', '".$_POST["transtype"]."', '".$currentDateTime."')";
		if(mysqli_query($conn, $sql)){
	    	echo "New record created successfully";
	    	echo "<script>setTimeout(\"location.href = 'customer-homepage.php';\",3600);</script>";
		}else{
			echo "Sorry some unexpected error occured please try again!";
	    	echo "Error: " . $sql . "<br>" . 	mysqli_error($conn);
	    	echo "<script>setTimeout(\"location.href = 'customer-transaction-html.php';\",3600);</script>";
		}
		mysqli_close($conn);
	}
?>