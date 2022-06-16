<?php
	
    include "pm_authCheck.php";
    include "config.php";
    
    $sql_statement = "SELECT P.* FROM pmanager P WHERE P.PMid = '" . $_SESSION['userId'] . "' ";

    $res = mysqli_query($db, $sql_statement);

    while($row = mysqli_fetch_assoc($res))
    {
        echo"<h2>WELCOME  </h2>";
        echo"<br>";
        echo"<br>";
        echo"<h4>Employee Name: </h4>".$row['PMname'];
        echo"<br>";
        echo"<br>";
        echo"<h4>Employee Id: </h4>".$row['PMid'];
        echo"<br>";
        echo"<br>";
        echo"<h4>Employee Username: </h4>".$row['PMusername'];
        echo"<br>";
        echo"<br>";
        echo"<h4>Employee Email: </h4>".$row['PMemail'];
    }

?>