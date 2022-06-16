<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>hulu</title>

 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/guljahan.css"/>


    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
							<div class="header-logo" align="center">
								<a href="#" class="logo">
									<img src="./img/hulu.png" width=200 alt="">
								</a>
							</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="top-header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- ACCOUNT -->
           <div class="col-md-6"></div>
						<div class="col-md-6 clearfix">
							<div class="header-ctn pull-right">
                <!-- Cart -->
                <div class="yourcart pull-right">
                  <a href="cart.php" class="btn" aria-expanded="true">
                    <i class="fa fa-shopping-cart"></i>
                    <span>My Cart</span>
                  </a>
                </div>
                <!-- /Cart -->
								<div class="acc">
								<?php
										echo '<div>
													<a class="btn btn-secondary" href="homepage.php" type="button" aria-haspopup="true" aria-expanded="false">
													Home Page
													</a>';
										if (isset($_SESSION['usernameCustomer']))
											echo '</div></div>'.'<div class="acc"><div><a href="userlogout.php"><i class="fa fa-user-o"></i> LOG OUT</a></div>';


								?>
								</div>

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="homepage.php">Home</a></li>
						<li><a href="categories.php">Categories</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container bootdey">
    <div class="row bootstrap snippets">

        <div class="clearfix visible-sm"></div>
        <!-- SECTION -->
    		<div class="section">
    			<!-- container -->
    			<div class="container">
    				<!-- row -->
    				<div class="row">
							<?php

								?>
    				<table class="table table-success table-striped">
    					<tr><th>ID</th><th>Product </th><th> Unit Price</th> <th>Quantity</th><th>Sub Total</th></tr>
    				<?php

    			   include "config.php";
    			   error_reporting(0);

              $uId = $_SESSION['customerId'];
            	$sql_statement = "SELECT P.pid, P.Name, P.Price, C.NumberOfProducts
                                FROM product P, customers CU, cart C
                                WHERE CU.userId=$uId AND CU.userId = C.userId AND C.pid = P.pid";

            	$resultt = mysqli_query($db, $sql_statement);
              $total = 0;
							$counter = 0;
							$_SESSION['button']="button";

            	while($row = mysqli_fetch_assoc($resultt))
            	{
								$pid = $row['pid'];
            		$productName = $row['Name'];
            		$productPrice = $row['Price'];
            		$numberOfProducts = $row['NumberOfProducts'];
            		$SubTotal = $productPrice * $numberOfProducts;
                $total=  $total+ $SubTotal;
								?>
								<tr>
									   <td><?php echo $pid; ?></td>
										 <td><?php echo $productName; ?></td>
										 <td><?php echo $productPrice; ?></td>
										 <form method='post' action='inc_dec_cart.php'>
										   <!--<input type='hidden' name='item'/> Why do you need this?-->
										   <td>
										       <button name='decqty'>-</button>
										       <input type='text' size='1' maxlength="0" name='item' value='<?= $numberOfProducts; ?>'/>
										       <button  name='incqty'>+</button>
										   </td>
										</form>
										 <td><?php echo $SubTotal; ?></td>

								 </tr> <?php
            	}
							$_SESSION['total'] = $total;
							if ($total > 0){
								$_SESSION['auth'] = true;
							}
							else{
								$_SESSION['auth'] = false;
							}
            ?>

							<script>
										$('button').each(function(key,value){
								    $(this).attr("id",key)
								});
							</script>
							<script>
										$("button").click(function() {

										var i = $(this).attr('id');
										var i;
										for (j = 0; j < 40; j++) {
										  if(i <= 1){
												document.cookie = "id = 1";
											}else if (i <=3){
												document.cookie = "id = 2";
											}else if (i <=5){
												document.cookie = "id = 3";
											}else if (i <=7){
												document.cookie = "id = 4";
											}else if (i <=9){
												document.cookie = "id = 5";
											}else if (i <=11){
												document.cookie = "id = 6";
											}else if (i <=13){
												document.cookie = "id = 7";
											}else if (i <=15){
												document.cookie = "id = 8";
											}else if (i <=17){
												document.cookie = "id = 9";
											}else if (i <=19){
												document.cookie = "id = 10";
											}else if (i <=21){
												document.cookie = "id = 11";
											}else if (i <=23){
												document.cookie = "id = 12";
											}else if (i <=25){
												document.cookie = "id = 13";
											}else if (i <=27){
												document.cookie = "id = 14";
											}else if (i <=29){
												document.cookie = "id = 15";
											}else if (i <=31){
												document.cookie = "id = 16";
											}else if (i <=33){
												document.cookie = "id = 17";
											}else if (i <=35){
												document.cookie = "id = 18";
											}else if (i <=37){
												document.cookie = "id = 19";
											}else if (i <=39){
												document.cookie = "id = 20";
											}
										}
								});</script>
              </table>
							<h3 class="col-md-6">Total: <?php echo $total; ?></h3>
              <h4 style=padding-right:90px; align="right">IDs</h4>
							<form action="deleteFromCart.php" method="POST" align="right">
								<select name="ids">
								<?php
								$sql_statement = "SELECT pid FROM Cart WHERE userId=$uId";
								$result = mysqli_query($db, $sql_statement);

								while($id_rows = mysqli_fetch_assoc($result)){
									$pid =  $id_rows['pid'];
									echo "<option value=$pid>".$pid."</option>";

								}
								?>
							</select>
							<button class="btn btn-danger"> Remove </button>
						</form>
            				</div>
            				<!-- /row -->
            			</div>
            			<!-- /container -->

									<br><br>
									<p class="col-md-3"></p>
									<a href="categories.php" class="btn btn-primary col-md-6" style=margin:7px; > Continue Shopping </a>
									<p class="col-md-3"></p>
									<a href="checkout.php" class="btn btn-success col-md-6"style=margin:7px;> Checkout </a>
									<div style=margin:30px;></div>
            		</div>
            		<!-- /SECTION -->
							</div>
    </div>
		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div>
							<div class="footer col-md-6" align="center">
								<h3 class="footer-title">About Us</h3>
								<p>Our team:<br>Khadeja Iqbal<br>Guljahan Annagurbanova<br>Ifrah Saleem<br>Haider Khan Jadoon<br>Saif Ul Malook</p>
              </div>
              <div class="footer col-md-6" align="center">
              <h3 class="footer-title">Contact Us</h3>
              <ul class="footer-links">
                <li><a href="#"><i class="fa fa-map-marker"></i>CS 306 Project<br>Sabanci University</a></li>
                <li><a href="#"><i class="fa fa-phone"></i>+01 23 45 67 89<br>+98 76 54 32 10</a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i>huluHulu@gmail.com</a></li>
              </ul>
             </div>
						</div>

						<div class="clearfix visible-xs"></div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
    <script language="JavaScript" type="text/javascript" src="scripts/jquery.js"></script>


	</body>
</html>
