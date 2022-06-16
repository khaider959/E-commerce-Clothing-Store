<?php
session_start();
unset($_SESSION["authorized"]);
unset($_SESSION["username"]);
unset($_SESSION["userId"]);
header("Location:pm_loginPage.php");
?>