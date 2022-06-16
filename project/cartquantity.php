
<?php
session_start();
include "config.php";

$user = $_SESSION['customerId'];

$pid = $_GET['pid'];
$sql = "SELECT * FROM cart WHERE pid = '$pid' AND userId='$user'";

$rt = mysqli_query($db, $sql);
if ($rt){
  echo "asdad";
}
$row = mysqli_fetch_assoc($rt);
$a = $row['pid'];
  echo $a."sdkjshfjskd ";
  if ($a == $pid){

    $Num = $row['NumberOfProducts'];
    $price = $row['totalPriceOfProduct'] / $Num;

    $sql1 = "UPDATE cart SET NumberOfProducts = $Num+1, totalPriceOfProduct= totalPriceOfProduct+$price
             WHERE userId = '$user' AND pid = '$pid'";

    $result1 = mysqli_query($db, $sql1);

  }
  else{
    echo $row['pid'];
    $sql1 = "SELECT Price FROM product WHERE pid = '$pid'";

    $result1 = mysqli_query($db, $sql1);

    while($row = mysqli_fetch_assoc($result1)){

        $price = $row['Price'];
        echo $row['Price'];

        $sql_statement = "INSERT INTO cart(userId, pid, NumberOfProducts, totalPriceOfProduct)
                          VALUE ('$user', '$pid', '1', '$price')";
        $result2 = mysqli_query($db, $sql_statement);

        }
  }

 header("Location: products.php");

?>
