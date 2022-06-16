<?php
include "config.php";
session_start();
error_reporting(0);
$getuser=$_SESSION['usersm'];
if ($getuser== true)
{


}
else
{
    header("Location: sm_loginPage.php");
} 
if ( isset($_POST['status'], $_POST['bdate']))
{
    $status=$_POST['status'];
    $date=$_POST['bdate'];
    $orderid= $_POST['orderID'];

    $sql = "UPDATE orders SET OrderStatus='$status', ShippedDate= '$date' WHERE orderID='$orderid'";
    $result = mysqli_query($db, $sql);
    if ($result > 0)
    {
        
        header("location: ./displayorders.php");
    }
    else{
        echo "sucks";
    }
    }
    
        ?>
    
}
