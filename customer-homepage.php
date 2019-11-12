<?php
	$servername = "localhost";
	$username = "root";
	$password = "password";
	$database = "library";
session_start();
$conn = mysqli_connect($servername, $username, $password, $database);
$ID = $_SESSION['customer_id'];
$sql = "select * from customer where customer_id = '$ID';";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$regdate = $row['regdate'];
$books_issued = $row['books_issued'];
$name = $row['name'];
$address = $row['address'];
$fine = $row['fine'];
#echo "Your id is " . $ID . ".<br>";
#echo "Your registration date is " . $regdate . ".<br>";
#echo "Your no of books issued is " . $books_issued . ".<br>";
#echo "Your name is " . $name . ".<br>";
#echo "Your address is " . $address . ".<br>";
#echo "Your fine is " . $fine . ".<br>";
?>
<html>
	<head>
		<title>Homepage</title>
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
			<h1>Customer's Page</h1>
			<hr>
			<?php
			$conn = mysqli_connect($servername, $username, $password, $database);
			$ID = $_SESSION['customer_id'];
			$sql = "select * from customer where customer_id = '$ID';";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_array($result);
			$regdate = $row['regdate'];
			$books_issued = $row['books_issued'];
			$name = $row['name'];
			$address = $row['address'];
			$fine = $row['fine'];
			echo "Your id is " . $ID . ".<br>";
			echo "Your registration date is " . $regdate . ".<br>";
			echo "Your no of books issued is " . $books_issued . ".<br>";
			echo "Your name is " . $name . ".<br>";
			echo "Your address is " . $address . ".<br>";
			echo "Your fine is " . $fine . ".<br>";
			?>
			<br>
			<a href = "customer-transaction-html.php">Transact a new book</a><br>
			<form action = "cust-book-display.php" method = "post"> 
				<input type = "submit" name = "custbookDataGet" value = "Get book data">		
			</form>
			<form action = "cust-transaction-display.php" method = "post">
				<input type = "submit" name = "custtransDataGet" value = "Get transaction data">
			</form>
			<a href = 'customer-logout.php'>Log out</a>
		</center>
	</body>
</html>