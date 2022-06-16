<?php
	session_start();
	include "config.php";

			$sql_statement = "INSERT INTO customers(isGuest) VALUES(0)";
			$r = mysqli_query($db, $sql_statement);

			$sql_statement = "SELECT MAX(userId) AS uIdm FROM customers";
			$rr = mysqli_query($db, $sql_statement);

			$roww = mysqli_fetch_assoc($rr);
			$_SESSION["customerId"] = $roww['uIdm'];
      header("Location: homepage.php");
?>
