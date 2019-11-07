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
				$query = "SELECT * FROM branch";
				$result = mysqli_query($connection, $query);
				echo "<table border>";
				echo "<th>Address</th><th>Branch ID</th><th>Manager ID</th>";
				while($row = mysqli_fetch_array($result)){   
				echo "<tr><td>" . $row['address'] . "</td><td>" . $row['branch_id'] . "</td><td>" . $row['manager_id'] . "</td></tr>"; 
				}
				echo "</table>";
				echo "<a href = 'admin-home.html'>Go Back</a>"; 
				mysqli_close($connection); 
?>