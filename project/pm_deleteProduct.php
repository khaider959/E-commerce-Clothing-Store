<?php
session_start();
include "config.php";

if(isset($_GET['pid']))
{
    $pid = $_GET['pid'];

    $sql_statement = "UPDATE product SET isDeleted = '1' WHERE pid='" . $_GET['pid'] . "'";
    
    $result = mysqli_query($db, $sql_statement);
    echo $result;
    if($result > 0)
    {
        echo 'Product successfully deleted.' . $pid ;
        header("Location: displayProduct.php");
    }

    else
    echo 'Product not deleted.' ;
}

else
{
    echo "The form is not set.";
}


?>