<?php
session_start();
include "config.php";

if(isset($_GET['userId']))
{
    
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $billingAddress = $_POST['billingAddress'];

    $sql_statement = "UPDATE customers SET Username = '$Username', Email = '$Email', billingAddress = '$billingAddress' WHERE userId = '" . $_GET['userId'] . "'";
    
    $result = mysqli_query($db, $sql_statement);

    if($result > 0)
    {
        echo 'Product successfully updated.';
        echo '<script type="text/javascript">alert("User details successfully updated!");';
        echo 'window.location.href = "accountInfo.php";';
        echo '</script>';
    }

    else
    echo 'User not updated.' . $result;
}

else
{
    echo "The form is not set.";
}


?>