<?php
$servername = "localhost";
	$username = "root";
	$password = "password";
	$database = "library";
session_start();
$conn = mysqli_connect($servername, $username, $password, $database);
$ID = $_SESSION['employee_id'];
$sql = "select * from employee where employee_id = '$ID';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$salary = $row['salary'];
$name = $row['name'];
$position = $row['position'];
//echo "Your employee-id is " . $ID . ".<br>";
//echo "Your name is " . $name . ".<br>";
//echo "Your salary is " . $salary . ".<br>";
//echo "Your position is " . $position . ".<br>";
?>
<html>
	<head>
		<title>Employee Homepage</title>
		<style>
					input[type=text] {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password ] {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
					input[type=submit] {
			  display: inline-block;
			  border-radius: 4px;
			  background-color: #f4511e;
			  border: none;
			  color: #FFFFFF;
			  text-align: center;
			  font-size: 28px;
			  padding: 20px;
			  width: 300px;
			  transition: all 0.5s;
			  cursor: pointer;
			  margin: 5px;
			}

			input[type = submit] span {
			  cursor: pointer;
			  display: inline-block;
			  position: relative;
			  transition: 0.5s;
			}

			input[type = submit] span:after {
			  content: '\00bb';
			  position: absolute;
			  opacity: 0;
			  top: 0;
			  right: -20px;
			  transition: 0.5s;
			}

			input[type = submit]:hover span {
			  padding-right: 100px;
			}

			input[type = submit]:hover span:after {
			  opacity: 1;
			  right: 0;
			}
		body {
			font-family: "Arial";
			background:rgb(242,238,203);
		}
		h1 {
			color:blue;
			text-transform:uppercase;
			font-size:40px;
			font-style:oblique;
			font-weight: bold;
		}
		a {
			font-size:30px;
			line-height: 50px;
			text-transform:uppercase;
		}
		a:link {
			color:orange;
		}
		a:visited {
			color:lime;
		}
		a:hover{
			color:blue;
		}
		a:active{
			color:cyan;
		}
	</style>
	</head>
	<body>
		<center>
			<h1>Employee Homepage</h1>
			<hr>
			<?php
	$conn = mysqli_connect($servername, $username, $password, $database);
	$ID = $_SESSION['employee_id'];
	$sql = "select * from employee where employee_id = '$ID';";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
	$salary = $row['salary'];
	$name = $row['name'];
	$position = $row['position'];
	echo "Your employee-id is " . $ID . ".<br>";
	echo "Your name is " . $name . ".<br>";
	echo "Your salary is " . $salary . ".<br>";
	echo "Your position is " . $position . ".<br>";
	?>
			<a href = "employee-transaction.html">Transaction page</a><br>
			<a href = "book-entry.html">Enter Details of Book</a><br>  
			<a href = "homepage.html">Log Out</a><br>
			<form action = "emp-book-display.php" method = "post"> 
				<input type = "submit" name = "empbookDataGet" value = "Get book data">		
			</form>
			<form action = "emp-transaction-display.php" method = "post"> 
				<input type = "submit" name = "emptransDataGet" value = "Get transaction data">		
			</form>
			<form action = "emp-customer-display.php" method = "post"> 
				<input type = "submit" name = "empcustDataGet" value = "Get customer data">		
			</form>
		</center>
	</body>
</html>