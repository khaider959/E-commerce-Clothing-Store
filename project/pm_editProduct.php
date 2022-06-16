<?php
session_start();
include "config.php";

if(isset($_GET['pid']))
{
    if(!file_exists($_FILES['Picture']['tmp_name']) || !is_uploaded_file($_FILES['Picture']['tmp_name']))
    {
        $Name = $_POST['Name'];
        $Price = $_POST['Price'];
        $Quantity = $_POST['Quantity'];
        $Size = $_POST['Size'];
        $cid = explode(' ', $_POST['cid'])[1];
        $PMid = $_SESSION['userId'];

        $sql_statement = "UPDATE product SET cid = '$cid', PMid = '$PMid', Name = '$Name', Price = '$Price', Quantity = '$Quantity', Size = '$Size' WHERE pid='" . $_GET['pid'] . "'";

        $result = mysqli_query($db, $sql_statement);

        if($result > 0)
        {
            echo 'Product successfully updated.';
            echo '<script type="text/javascript">alert("Product successfully updated!");';
            echo 'window.location.href = "displayProduct.php";';
            echo '</script>';

        }

        else
        echo 'Product not updated.' . $result;
    }

    else
    {
        $Picture = addslashes(file_get_contents($_FILES["Picture"]["tmp_name"]));
        $Name = $_POST['Name'];
        $Price = $_POST['Price'];
        $Quantity = $_POST['Quantity'];
        $Size = $_POST['Size'];
        $cid = explode(' ', $_POST['cid'])[1];
        $PMid = $_SESSION['userId'];

        $sql_statement = "UPDATE product SET cid = '$cid', PMid = '$PMid', Name = '$Name', Price = '$Price', Quantity = '$Quantity', Size = '$Size', Picture = '$Picture' WHERE pid='" . $_GET['pid'] . "'";

        $result = mysqli_query($db, $sql_statement);

        if($result > 0)
        {
            echo 'Product successfully updated.';
            echo '<script type="text/javascript">alert("Product successfully updated!");';
            echo 'window.location.href = "displayProduct.php";';
            echo '</script>';

        }

        else
        echo 'Product not updated.' . $result;
    }
}

else
{
    echo "The form is not set.";
}


?>
