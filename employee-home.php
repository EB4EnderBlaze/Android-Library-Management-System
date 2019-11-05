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
            //$sql2 = "SELECT employee_id FROM employee WHERE password = '".$password."'";
            //$result2 = mysqli_query($conn, $sql2);
            $ans1 = mysqli_fetch_assoc($result1);
            //$ans2 = mysqli_fetch_assoc($result2);
            //echo $ans1;
            //echo "id: " . $ans1["employee_id"];
            //echo $sql1;
            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]."  email-id:- ".$row["email"]."<br>";
            //echo $result1;
            //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]."  email-id:- ".$row["email"]."<br>";
            if($password == $ans1["password"]) 
            { 
                echo 'Correct login id';
                //header('Location: transaction.html');
            }
            else
            {
                echo'The username or password are incorrect!';
               // header('Location: employee-login.html');
            }
    }
    else {
        echo 'Please enter both username and password!';
        //header('Location: employee-login.html');
    }
    include 'homepage.html';
?>