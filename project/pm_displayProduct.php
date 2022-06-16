
<html>
    <body>
    <form action="" method="POST" enctype="multipart/form-data">

<?php

include "config.php";

$sql_statement = "SELECT P.*, C.Name AS categoryName FROM product P, category C WHERE P.cid = C.cid ";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
    if($row['isDeleted'] == 0)
    {
        $categoryName = $row['categoryName'];
        $pid = $row['pid'];
        $PMid = $row['PMid'];
        $Name = $row['Name'];
        $Price = $row['Price'];
        $Quantity = $row['Quantity'];
        $Size = $row['Size'];
        $Picture = $row['Picture'];
?>
        <div class="col-md-6 col-xs-6">
            <!-- <div class="col-md-4 col-xs-6"></div> -->
            <div class="product">
                <div class="product-img">
                <?php echo '<img src="data:image;base64,'.base64_encode($Picture).'" alt="Image">' ?>
                </div>
                <div class="product-body">
                    <p class="product-category"><?php echo $categoryName?></p>
                    <h3 class="product-name"><a href="#"><?php echo $Name?></a></h3>
                    <h4 class="product-price"><?php echo $Price?>TL</h4>
                    <div class="product-rating">
                    <p>Quantity: <?php echo $Quantity?></p>
                    </div>
                    <div class="product-btns">
                        <button class="add-to-wishlist"><a href="pm_deleteProduct.php?pid=<?php echo $row['pid'];?>"><i class="fa fa-trash"></i><span class="tooltipp">Delete</span></a></button>
                        <button class="add-to-compare"><a href="getProduct.php?pid=<?php echo $row['pid'];?>"><i class="fa fa-edit"></i><span class="tooltipp">Edit</span></a></button>
                    </div>
                </div>
                <div class="add-to-cart">
                    <h6 class="product-size" ><a href="#"><?php echo $Size?></a></h6>
                </div>
            </div>
        </div>
        </form>
    <?php } 
    }?>
</body>
</html>
