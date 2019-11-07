<?php
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
				$query = "SELECT * FROM customer";
				$result = mysqli_query($connection, $query);
				echo "<table border>";
				echo "<th>Customer ID</th><th>Reg Date</th><th>Books Issued</th><th>Name</th><th>Address</th><th>Fine</th>";
				while($row = mysqli_fetch_array($result)){   
				echo "<tr><td>" . $row['customer_id'] . "</td><td>" . $row['regdate'] . "</td><td>" . $row['books_issued'] . "</td><td>" . $row['name'] . "</td><td>" . $row['address'] . "</td><td>" . $row['fine'] . "</td></tr>"; 
				}
				echo "</table>";
				echo "<a href = 'admin-home.html'>Go Back</a>"; 
				mysqli_close($connection); 
?>