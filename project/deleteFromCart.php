
<?php
session_start();
 include "userAutocheck.php";
 include "config.php";
 error_reporting(0);
 if (isset($_POST["ids"])){

   $selection_id =$_POST['ids'];
   $uId = $_SESSION['customerId'];
   $sql_statement = "DELETE
                     FROM cart
                     WHERE userId=$uId AND pid = $selection_id";

    $result = mysqli_query($db, $sql_statement);

    while($row = mysqli_fetch_assoc($result))
    {
    }
    header("Location: cart.php");

 }
 else {
   echo "The form is not set!";
 }
 ?>
