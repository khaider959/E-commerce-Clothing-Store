<?php

    include "config.php";


    if(isset($_POST['PMname'], $_POST['PMpass'], $_POST['PMemail'], $_POST['PMusername']))
    {

        $PMname = $_POST['PMname'];
        $PMpass = $_POST['PMpass'];
        $PMemail = $_POST['PMemail'];
        $PMusername = $_POST['PMusername'];

        $sql_statement = "INSERT INTO pmanager(PMname,PMpass, PMemail, PMusername) VALUES ('$PMname', '$PMpass', '$PMemail', '$PMusername')";

        $result = mysqli_query($db, $sql_statement);

        if($result > 0)
        {
            echo $PMname . " signed up successfully.";
            echo '<script type="text/javascript">alert("Successfully registered!");';
            echo 'window.location.href = "pm_loginPage.php";';
            echo '</script>';
        }

        else
        {
            echo "Could not sign up!";
            echo '<script type="text/javascript">alert("Could not signup!");';
            echo 'window.location.href = "pm_signUp.php";';
            echo '</script>';
        }
    }

    else 
    {
        echo "The form is not set.";
    }

?>