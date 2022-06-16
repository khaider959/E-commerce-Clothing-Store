

 <html>
<body>
    


<?php

include "config.php";

$sql = "SELECT * FROM comments";
                             $result = mysqli_query($db, $sql);
                            
                            while($row = mysqli_fetch_assoc($result)) {

                                        ?>
                                        <?php echo $row["Rating"];?>
                                        <?php echo $row["Review"];?>
                                        }



  
</body>
</html>