<?php

session_start();
    include "config.php";

    if(isset($_POST['SMpass'], $_POST['SMusername']))
    {
        $SMpass = $_POST['SMpass'];
        $SMusername = $_POST['SMusername'];

        $sql_statement = "SELECT * FROM salesmanager S WHERE S.SMpass = '$SMpass' AND S.SMusername = '$SMusername'";

        $result = mysqli_query($db, $sql_statement);
        $row = mysqli_fetch_assoc($result);
        if($row == 0)
        {
           
            echo '<script type="text/javascript">alert("Incorrect login details!");';
            echo 'window.location.href = "sm_loginPage.php";';
            echo '</script>';
            
        }

        while($row)
        {

            if($row['SMpass'] == $SMpass && $row['SMusername'] == $SMusername)
            {
                // set the session
                $_SESSION['authorized'] = true;
                //set User Id
                $_SESSION['usersm'] = $row['SMid']; 
                $SMname= $row['SMname'];

                //echo $SMname . " logged in successfully.";
                header("Location: smwelcome.php");
            }

            else
                echo "Could not login!";
        }
    }
    else 
    {
        echo "The form is not set.";
    }
?>
