<?php

    include "config.php";


    if(isset($_POST['SMname'], $_POST['SMpass'], $_POST['SMmail'], $_POST['SMusername']))
    {

        $SMname = $_POST['SMname'];
        $SMpass = $_POST['SMpass'];
        $SMmail = $_POST['SMmail'];
        $SMusername = $_POST['SMusername'];

        $sql_statement = "INSERT INTO salesmanager(SMname,SMpass, SMmail, SMusername) VALUES ('$SMname', '$SMpass', '$SMmail', '$SMusername')";

        $result = mysqli_query($db, $sql_statement);

        if($result > 0)
        {
            echo $SMname . " signed up successfully.";
            echo '<script type="text/javascript">alert("Successfully registered!");';
            echo 'window.location.href = "sm_loginPage.php";';
            echo '</script>';
        }

        else
        {
            echo "Could not sign up!";
            echo '<script type="text/javascript">alert("Could not signup!");';
            echo 'window.location.href = "sm_signUp.php";';
            echo '</script>';
        }
    }

    else 
    {
        echo "The form is not set.";
    }

?>