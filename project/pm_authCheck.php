<?php
if(!isset($_SESSION['authorized']))
{
    header("Location: pm_loginPage.php");
}

?>