<?php
session_start();
echo "Employee ID is " . $_SESSION["employee_id"] . ".<br>";
?>
<html>
	<head>
		<title>Employee Homepage</title>
		<style>
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