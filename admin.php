<?php
    //$servername = "localhost";
    //$username = "root";
    //$password = "password";
    //$database = "library";

    //Connect
    //$conn = mysqli_connect($servername, $username, $password, $database);
    //if(!$conn){
    //    die("connection_failed: ".mysqli_connect_error());
    //}
    //else{
    //    echo "Database connected sucessfully";
    //    echo "<br>";
    //}
    if(isset($_POST["adminID"], $_POST["adminPass"])) 
    {     

            $ID = $_POST["adminID"]; 
            $password = $_POST["adminPass"]; 
            //$sql1 = "SELECT employee_id, password FROM employee WHERE employee_id = '".$ID."'";
            //$result1 = mysqli_query($conn, $sql1);
            //$ans1 = mysqli_fetch_assoc($result1);
            if($password == "library_213" and $ID == 18) 
            { 
                echo 'Hey admin welcome!!';
                //header('Location: transaction.html');
                echo "<script>setTimeout(\"location.href = 'admin_home.html';\",3600);</script>";
            }
            else
            {
                echo'The username or password are incorrect!';
                //header('Location: employee-login.html');
                echo "<script>setTimeout(\"location.href = 'homepage.html';\",3600);</script>";
            }
    }
    else {
        echo 'Please enter both username and password!';
        //header('Location: employee-login.html');
        echo "<script>setTimeout(\"location.href = 'homepage.html';\",3600);</script>";
    }
?>