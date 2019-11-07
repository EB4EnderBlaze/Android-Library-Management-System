<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $database = "library";

    //Connect
    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("connection_failed: ".mysqli_connect_error());
    }
    else{
        echo "Database connected sucessfully";
        echo "<br>";
    }
    if(isset($_POST["empID"], $_POST["empPass"])) 
        {     

            $ID = $_POST["empID"]; 
            $password = $_POST["empPass"]; 
            $sql1 = "SELECT employee_id, password FROM employee WHERE employee_id = '".$ID."'";
            $result1 = mysqli_query($conn, $sql1);
            $ans1 = mysqli_fetch_assoc($result1);
            if($password == $ans1["password"]) 
            { 
                echo 'You are now logged in , you can perform transaction on books now';
                echo "<script>setTimeout(\"location.href = 'employee-homepage.html';\",3600);</script>";
            }
            else
            {
                echo'The username or password are incorrect!';
                echo "<script>setTimeout(\"location.href = 'employee-login.html';\",3600);</script>";
            }
    }
    else {
        echo 'Please enter both username and password!';
        echo "<script>setTimeout(\"location.href = 'employee-login.html';\",3600);</script>";
    }
?>