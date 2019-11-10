<?php
session_start();
echo "Your id is " . $_SESSION['customer_id'] . ".<br>";
?>
<html>
	<head>
		<title>Issue or Return a Book</title>
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
			<h1>Issue or Return a Book</h1>
			<hr>
			<form action = "customer-transaction.php" method = "post">
				Transaction ID : <input type = "text" name = "transID"><br><br>
				Book ID : <input type = "text" name = "bookID"><br><br>
				Branch ID : <input type = "text" name = "branchID"><br><br>
				Transaction Type : <select name = "transtype">
					<option value = "select" selected> Select One </option>
					<option value = "transissue"> Issue </option>
					<option value = "transreturn"> Return </option>
				</select><br><br>
				<input type = "submit" name = "transSubmit">
			</form>
		</center>
	</body>
</html>