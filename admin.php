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
    if(isset($_POST["adminID"], $_POST["adminPass"])) 
    {     

            $ID = $_POST["adminID"]; 
            $password = $_POST["adminPass"]; 
            $sql1 = "SELECT id, password FROM admin WHERE id = '".$ID."'";
            $result1 = mysqli_query($conn, $sql1);
            $ans1 = mysqli_fetch_assoc($result1);
            if($password == $ans1['password']) 
            { 
                echo 'Hey admin welcome!!';
                session_start();
                $_SESSION['admin_id'] = $ID;
                //header('Location: transaction.html');
                echo "<script>setTimeout(\"location.href = 'admin-home.php';\",3600);</script>";
            }
            else
            {
                echo'The username or password are incorrect!';
                echo "<script>setTimeout(\"location.href = 'homepage.html';\",3600);</script>";
            }
    }
    else {
        echo 'Please enter both username and password!';
        echo "<script>setTimeout(\"location.href = 'homepage.html';\",3600);</script>";
    }
?>