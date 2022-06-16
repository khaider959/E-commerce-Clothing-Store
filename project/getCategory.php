<html>
<body>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Category</label>
        <select  class="form-control" id="exampleFormControlSelect1" name= "cid">



<?php

include "config.php";

$sql_statement = "SELECT * FROM category";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
    $CName = $row['Name'];
    $cid = $row['cid'];

    echo "<option selected>" . $CName . " " . $cid . "</option>";
}
?>

</select>
    </div>
</body>
</html>
