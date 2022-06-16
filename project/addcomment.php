<?php
session_start();
include "config.php";

$user = $_SESSION['customerId'];
$rate = $_POST['rating'];
$rev = $_POST['Comment'];
$p = $_GET['pid'];

$sql_statement = "INSERT INTO comments(Rating, pid, userId, Review)
                VALUES ('$rate','$p','$user', '$rev')";
$result2 = mysqli_query($db, $sql_statement);

header("Location: orders.php");
?>
