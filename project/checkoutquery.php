<?php

    session_start();
    include "config.php";
    error_reporting(0);

    $uId = $_SESSION['customerId'];
    $sql_statement = "SELECT SMid FROM salesmanager";
    $result = mysqli_query($db, $sql_statement);
    $count = 1;
    while($row = mysqli_fetch_assoc($result))
    {
      $count= $count + 1;
    }
    $rnd = rand(1, $count);

    $sql_statement = "SELECT SMid FROM salesmanager";
    $result = mysqli_query($db, $sql_statement);
    $count = 1;
    while($row = mysqli_fetch_assoc($result))
    {
      if ($count= $rnd){
        $smid = $row['SMid'];
      }
      $count= $count + 1;
    }

    if(isset($_POST['name'], $_POST['surname'],$_POST['email'],$_POST['address'], $_POST['creditCardNo'], $_POST['creditCardName'], $_POST['expiry_year'], $_POST['expiry_month'], $_POST['cvc']))
    {

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $creditCardNo = $_POST['creditCardNo'];
        $creditCardName = $_POST['creditCardName'];
        $creditCardExpYear = $_POST['expiry_year'];
        $creditCardExpMonth = $_POST['expiry_month'];
        $cvc = $_POST['cvc'];
        if (($creditCardExpMonth/ 10) >=1){
          $expr = $creditCardExpYear.'-'.$creditCardExpMonth.'-01';
        }else{
          $expr = $creditCardExpYear.'-0'.$creditCardExpMonth.'-01';
        }

        //$date=date_create_from_format("Y-m-d","2020-01-31");
        //echo .date_format($date,"Y-m-d");

        $result = mysqli_query($db, $sql_statement);

        $sql_statement = "UPDATE customers
                          SET creditName = '$creditCardName', Email='$email', billingAddress = '$address', creditCardNo = '$creditCardNo', creditCardExpDate = '$expr', creditCardPin = '$cvc'
                          WHERE userId = $uId";

        $result = mysqli_query($db, $sql_statement);

        header("Location: orderdetails.php");

    }

    else
    {
        echo "The form is not set.";
    }

?>
