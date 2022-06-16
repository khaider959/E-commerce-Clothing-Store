<?php

include "config.php";
                                                $quan = $_POST['quantity'];
                                                $pid = $_POST['pid'];
                                                
                                                $sql_statement = "UPDATE product SET Quantity = Quantity - $quan
                                                                   WHERE pid = $pid";
                                                $result2 = mysqli_query($db, $sql_statement);

                                                header("Location: allproducts.php");
?>