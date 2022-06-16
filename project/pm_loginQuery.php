<?php

	session_start();

?>


<?php

    include "config.php";
  
    if(isset($_POST['PMpass'], $_POST['PMusername']))
    {
        $PMpass = $_POST['PMpass'];
        $PMusername = $_POST['PMusername'];

        $sql_statement = "SELECT * FROM pmanager P WHERE P.PMpass = '$PMpass' AND P.PMusername = '$PMusername'";

        $result = mysqli_query($db, $sql_statement);

        
        $row = mysqli_fetch_assoc($result);
       
        if($row == 0)
        {
           
            echo '<script type="text/javascript">alert("Incorrect login details!");';
            echo 'window.location.href = "pm_loginPage.php";';
            echo '</script>';
            
        }
        
        else 
        {
            while($row)
            {

                if($row['PMpass'] == $PMpass && $row['PMusername'] == $PMusername)
                {
                    $check = true;
                    // set the session
                    $_SESSION['authorized'] = true;
                    //set User Id
                    $_SESSION['userId'] = $row['PMid']; 
                    $_SESSION['username'] = $row['PMusername'];

                    echo $PMusername . " logged in successfully.";
                    header("Location: pm_homePage.php");
                }

                else
                {
                    echo "Could not login!";
                    header("Location: pm_loginPage.php");
                }
            }
        }
        
    }
    else 
    {
        echo "The form is not set.";
    }
?>