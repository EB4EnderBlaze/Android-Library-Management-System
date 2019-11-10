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
				$query = "SELECT * FROM transaction_status";
				$result = mysqli_query($connection, $query);
				echo "<table border>";
				echo "<th>Customer ID</th><th>Book ID</th><th>Branch ID</th><th>Issue</th><th>Transaction Date</th><th>Transaction ID</th>";
				while($row = mysqli_fetch_array($result)){   
				echo "<tr><td>" . $row['customer_id'] . "</td><td>" . $row['book_id'] . "</td><td>" . $row['branch_id'] . "</td><td>" . $row['issue'] . "</td><td>" . $row['trans_date'] . "</td><td>" . $row['trans_id'] . "</td></tr>"; 
				}
				echo "</table>";
				echo "<a href = 'employee-homepage.php'>Go Back</a>"; 
				mysqli_close($connection); 
?>