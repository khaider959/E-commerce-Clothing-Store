

<html>
    <body>
    

<?php

include "config.php";

$sql_statement = "SELECT *
FROM comments
   WHERE pid = $proID";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
    
        $rate = $row['Rating'];
        $review = $row['Review'];
?>
          
                                                            <table style="width:100%", border=" 1px solid black">
                                                            <tr>
                                                                <th>Rating</th>
                                                                <th>Review</th>
                                                                
                                                               

                                                            </tr>
                                                            <tr>
                                                                <td> <?php echo $row["Rating"];?> </td>
                                                                <td> <?php echo $row["Review"];?> </td>
                                                                

                                                            </tr>
                                                            
                                                            </table>
        
    <?php 
    }?>
</body>
</html>

