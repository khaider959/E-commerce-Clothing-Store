<?php
session_start();
include "config.php";

if(isset($_POST['upload']))
{

    $Picture = addslashes(file_get_contents($_FILES["Picture"]["tmp_name"]));
    $Name = $_POST['Name'];
    $Price = $_POST['Price'];
    $Quantity = $_POST['Quantity'];
    $Size = $_POST['Size'];
    $cid = explode(' ', $_POST['cid'])[1];
    $PMid = $_SESSION['userId'];
    $isDeleted = false;

    $sql_statement = "INSERT INTO product(cid,  PMid, Name, Price, Quantity, Size, Picture, isDeleted) VALUES('$cid', '$PMid', '$Name', '$Price', '$Quantity', '$Size',  '$Picture', '$isDeleted')";
    
    $result = mysqli_query($db, $sql_statement);
 
    if($result > 0)
    {
        echo 'Product successfully added.';
        header("Location: displayProduct.php");
    }

    else
    echo 'Product not added.' . $result;
}

else
{
    echo "The form is not set.";
}


?>