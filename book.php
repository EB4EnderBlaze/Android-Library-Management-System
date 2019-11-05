<?php
	//In this code we demonstrate insertion of data
	//Declare the variables
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$database = "library";

	//Connect
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
    	echo "New record created successfully";
    	include 'homepage.html';
	}else{
    	echo "Error: " . $sql . "<br>" . 	mysqli_error($conn);
	}
	mysqli_close($conn);
?>