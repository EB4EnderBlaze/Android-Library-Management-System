<?php
session_start();
echo "Your id is " . $_SESSION['customer_id'] . ".<br>";
?>
<html>
	<head>
		<title>Homepage</title>
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
			<h1>Customer's Page</h1>
			<hr>
			Hello Dear Customer
			<br>
			<a href = "customer-transaction-html.php">Transact a new book</a><br>
			<form action = "cust-book-display.php" method = "post"> 
				<input type = "submit" name = "custbookDataGet" value = "Get book data">		
			</form>
			<form action = "cust-transaction-display.php" method = "post">
				<input type = "submit" name = "custtransDataGet" value = "Get transaction data">
			</form>
			<a href = 'customer-logout.php'>Log out</a>;"
		</center>
	</body>
</html>