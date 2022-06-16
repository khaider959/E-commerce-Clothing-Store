<html>
    <body>
    <form action="" method="POST" enctype="multipart/form-data">

<?php

include "config.php";

$sql_statement = "SELECT P.*, C.Name AS categoryName FROM product P, category C WHERE P.cid = C.cid ";



if (isset($_POST['price-min'])) {
    $priceMin = $_POST['price-min'];
    $priceMax = $_POST['price-max'];
    $order = $_POST['order'];
    $sql_statement = $sql_statement . " AND Price BETWEEN $priceMin AND $priceMax ORDER BY Price $order";
}
$result = mysqli_query($db, $sql_statement);
while($row = mysqli_fetch_assoc($result))
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

                   <!--- <form action ="product.php" method= "POST">  --->
                    <h3 class="active"><a href="product.php?pid=<?php echo $row['pid'];?>"><?php echo $Name?></a></h3>

                   <!-- </form> -->
                    <h4 class="product-price"><?php echo $Price?>TL</h4>
                    <h5 class="product-pid"><?php echo $pid?></h5>
                    <div class="product-rating">
                    <p>Quantity: <?php echo $Quantity?></p>
                    </div>
                    <h6 class="product-size" ><a href="#"><?php echo $Size?></a></h6>
                    <div class="product-btns">
                    </div>

                
                </div>
               <?php
                
                if ($Quantity != 0)
                {

                    ?>
                  <div class="add-to-cart">
                 <button class="add-to-cart-btn"><a href="cartquantity.php?pid=<?php echo $row['pid'];?>"><i class="fa fa-shopping-cart"></i> add to cart</button>
                 </div>

                 <?php
                }
                else
                {
                    ?>
                    <div class="add-to-cart">
                    <button class="add-to-cart-btn">Out Of Stock!</button>
                    </div>

                    <?php
                    }
                ?>
                
                
                                                                                
                   
            </div>
        </div>
        </form>
    <?php 
    }
    
    ?>
</body>
</html>

