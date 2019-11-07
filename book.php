<?php
	//In this code we demonstrate insertion of data
	//Declare the variables
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$database = "library";

	//Connect
	if(!($_POST["bookID"] || $_POST["title"] || $_POST["edition"] || $_POST["category"] || $_POST["author"] || $_POST["publisher"])){
		echo"Please enter all the fields";
		echo "<script>setTimeout(\"location.href = 'book-entry.html';\",3600);</script>";
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
		$sql = "insert into book(title, edition, book_id, status ,category, author_name, publisher) values ('".$_POST["title"]."', '".$_POST["edition"]."', '".$_POST["bookID"]."', '".$_POST["status"]."', '".$_POST["category"]."','".$_POST["author"]."', '".$_POST["publisher"]."' )";
		if(mysqli_query($conn, $sql)){
	    	echo "New Book Added Sucessfully";
	    	echo "<script>setTimeout(\"location.href = 'employee-homepage.html';\",3600);</script>";
		}else{
	    	echo "Error: " . $sql . "<br>" . 	mysqli_error($conn);
	    	echo "<script>setTimeout(\"location.href = 'book-entry.html';\",3600);</script>";
		}
		mysqli_close($conn);
	}
?>