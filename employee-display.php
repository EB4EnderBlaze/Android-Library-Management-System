<?php
				session_start();
				echo "Admin_ID is " . $_SESSION["admin_id"] . ".<br>";
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
				$query = "SELECT * FROM employee";
				$result = mysqli_query($connection, $query);
				echo "<table border>";
				echo "<th>Employee ID</th><th>Name</th><th>Salary</th><th>Position</th>";
				while($row = mysqli_fetch_array($result)){   
				echo "<tr><td>" . $row['employee_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['salary'] . "</td><td>" . $row['position'] . "</td></tr>"; 
				}
				echo "</table>";
				echo "<a href = 'admin-home.php'>Go Back</a>"; 
				mysqli_close($connection); 
?>