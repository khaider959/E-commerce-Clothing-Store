<?php

 session_start();

if(isset($_POST['username'] , $_POST['password'] , $_POST['email_address']))
    {
		$conn = new mysqli('localhost', 'root', '', 'onlinesstore');

		if ($conn->connect_error) {
		  die("Connection failed: " . $conn->connect_error);
		}
        $Username = $_POST['username'];
        $Password = $_POST['password'];
        $email = $_POST['email_address'];


        $sql_statement = "INSERT INTO customers(Username,Password, Email, isGuest) VALUES ('$Username', '$Password', '$email', '1')";

        $result = $conn->query($sql_statement);

        if($result > 0){
            echo $Username . " signed up successfully.";
			echo '<script type="text/javascript">alert("Successfully registered!");';
            echo 'window.location.href = "login.php";';
            echo '</script>';
		}
        else{
            echo "Could not sign up!";
			echo '<script type="text/javascript">alert("Could not signup!");';
            echo 'window.location.href = "signup.php";';
            echo '</script>';
		}

    }


?>
