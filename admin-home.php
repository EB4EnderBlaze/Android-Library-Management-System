<?php
session_start();
echo "Admin_ID is " . $_SESSION["admin_id"] . ".<br>";
?>
<html>
	<head>
		<title>Admin</title>
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
			<h1>Admin Homepage</h1>
			<hr>
			<table cellspacing = "10" cellpadding = "10">
				<tr>
					<td><a href = "employee-signup.html">Add new employees</a><br></td>
					<td><a href = "customer-signup.html">Add new customers</a><br></td>
					<td><a href = "branchcreate.html">Create new branch</a><br></td>
				</tr>
				<tr>
					<td><a href = "employee-edit1.html">Edit employees</a><br></td>
					<td><a href = "customer-edit.html">Edit customers</a><br></td>
					<td><a href = "branchedit.html">Edit branch</a><br></td>
				</tr>
				<tr>
					<td><a href = "employee-delete.html">Delete employees</a><br></td>
					<td><a href = "customer-delete.html">Delete customers</a><br></td>
					<td><a href = "branchdelete.html">Delete branch</a><br></td>
				</tr>
			</table>
			<!---a href = "employee-signup.html">Add new employees</a><br>
			<a href = "customer-signup.html">Add new customers</a><br>
			<a href = "branchcreate.html">Create new branch</a><br>
			<a href = "admin-logout.php">Log Out</a><br>
			<a href = "change-admin.html">Change admin</a><br-->
			<form action = "employee-display.php" method = "post"> 
				<input type = "submit" name = "empDataGet" value = "Get emp data">		
			</form>
			<form action = "customer-display.php" method = "post"> 
				<input type = "submit" name = "custDataGet" value = "Get customer data">		
			</form>
			<form action = "branch-display.php" method = "post"> 
				<input type = "submit" name = "branchDataGet" value = "Get branch data">		
			</form>
			<form action = "book-display.php" method = "post"> 
				<input type = "submit" name = "bookDataGet" value = "Get book data">		
			</form>
		</center>
	</body>
</html>