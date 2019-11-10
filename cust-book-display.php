<?php
				session_start();
				echo "Your id is " . $_SESSION['customer_id'] . ".<br>";
				$servername = "localhost";
	    		$username = "root";
	    		$password = "password";
	    		$database = "library";
				$connection = mysqli_connect($servername, $username, $password, $database);
				//mysqli_select_db('$database');
				if(!$connection){
					die("connection_failed: ".mysqli_connect_error());
				}
				else{
					echo "Database connected sucessfully";
					echo "<br>";
				}
				$query = "SELECT * FROM book";
				$result = mysqli_query($connection, $query);
				echo "<table border>";
				echo "<th>Title</th><th>Edition</th><th>Book ID</th><th>Status</th><th>Category</th><th>Author Name</th><th>Publisher</th>";
				while($row = mysqli_fetch_array($result)){   
				echo "<tr><td>" . $row['title'] . "</td><td>" . $row['edition'] . "</td><td>" . $row['book_id'] . "</td><td>" . $row['status'] . "</td><td>" . $row['category'] . "</td><td>" . $row['author_name'] . "</td><td>" . $row['publisher'] . "</td></tr>"; 
				}
				echo "</table>";
				echo "<a href = 'customer-homepage.php'>Go Back</a><br>"; 
				echo "<a href = 'customer-logout.php'>Log out</a>";
				mysqli_close($connection); 
?>