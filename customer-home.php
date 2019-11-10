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
    if(isset($_POST["custID"], $_POST["custPass"])) {     

            $ID = $_POST["custID"];
            $myVariable = $ID; 
            $password = $_POST["custPass"]; 
            $sql1 = "SELECT customer_id, password FROM customer WHERE customer_id = '".$ID."'";
            $result1 = mysqli_query($conn, $sql1);
            $ans1 = mysqli_fetch_assoc($result1);
            if($password == $ans1["password"]) { 
                //echo 'Correct login id';
                //header('Location: transaction.html');
                $sql2 = "insert into active_customers(id) values ($ID)";
                $result2 = mysqli_query($conn, $sql2);
                echo "You are now logged in !";
                session_start();
                $_SESSION['customer_id'] = $ID;
                //var favoritemovie = "Shrek";
				//sessionStorage.setItem("favoriteMovie", favoritemovie);
				//var val = "<?php echo $val ?;>";
				//var customer_id = "<?php echo $ID ?;>";
                //$_POST['customer_id'] = $ID;
				//echo "<script> var customer_id = '$ID';</script>";
				//echo "<script>sessionStorage.setItem('customer_id', customer_id);</script>";
                echo "<script>setTimeout(\"location.href = 'customer-homepage.php';\",3600);</script>";
            }
            else{
                echo'The username or password are incorrect, you are redirected back to login page!';
                    //header('Location: employee-login.html');
                echo "<script>setTimeout(\"location.href = 'customer-login.html';\",3600);</script>";
                }
    }
    else {
        echo 'Please enter both username and password!';
            //header('Location: employee-login.html');
        echo "<script>setTimeout(\"location.href = 'customer-login.html';\",3600);</script>";
        }
?>