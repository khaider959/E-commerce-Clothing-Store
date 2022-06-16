<?php
session_start();
include "config.php";
include "userAutocheck.php";
$user = $_SESSION['customerId'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title><?php echo "Orders"; ?></title>

        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="css/slick.css"/>
        <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Custom stlylesheet -->

        <link type="text/css" rel="stylesheet" href="css/guljahan.css"/>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>

            .orders-row {
                display: flex;
                justify-content: space-around;
            }

            .ord-box {
                padding: 0.5em;
                background: #f7f7f7;
                border-radius: 10px;
                margin: 2em 0.5em;
            }

            .ord-box > .ord-bg {
                height: 400px;
            }

            .ord-box > h3 {
                text-align: center;
                text-transform: uppercase;
                margin: 1em auto;
            }
        </style>

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

						<!-- SEARCH BAR -->
						<div class="col-md-8">
							<div class="header-search" padding-left="10px">
								<form action="search.php" method="POST">
									<select name="opt" class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Coats</option>
										<option value="2">Dresses</option>
										<option value="3">Trousers</option>
										<option value="4">Bags</option>
										<option value="5">Shoes</option>
										<option value="6">Accessories</option>
										<option value="7">Shirts</option>
										<option value="8">Sweat-shirts</option>
										<option value="9">Suits</option>
										<option value="10">Skirts/Shorts</option>
									</select>
									<input class="input" name="search" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->

						<div class="col-md-4 clearfix">
							<div class="header-ctn pull-right">
								<div class="acc">
								<?php
									if (isset($_SESSION['usernameCustomer']))
										echo '<li><a href="accountInfo.php"><i class="fa fa-user-o"></i> Welcome, ' . $_SESSION["usernameCustomer"] . '!</a></li>
										<li><a href="userlogout.php"><i class="fa fa-user-o"></i> LOG OUT</a></li>';
									else
										echo '<div class="dropdown pull-right accounts">
													<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														Login
													</button>
													<div class="dropdown-menu acc" aria-labelledby="dropdownMenuButton">
														<a class="dropdown-item acc" href="login.php">User</a><br>
														<a class="dropdown-item acc" href="pm_loginPage.php">Product Manager</a><br>
														<a class="dropdown-item acc" href="sm_loginPage.php">Sales Manager</a><br>
													</div>
										</div>';
								?>
								</div>
								<!-- Cart -->
								<div class="pull-right">
									<a href="cart.php" class="btn" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>My Cart</span>
									</a>
								</div>
								<!-- /Cart -->
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
						<li><a href="homepage.php">Home</a></li>
						<li><a href="categories.php">Categories</a></li>
						<li><a href="products.php">Products</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

        <!-- BREADCRUMB -->
        <div id="breadcrumb" class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb-tree">
                            <li><a href="homepage.php">Home</a></li>
                            <li><a href="orders.php">Orders</a></li>

                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /BREADCRUMB -->

        <!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- STORE -->
                    <div id="store" class="col">


                        <!-- store products -->
                        <div class="row">

                        <?php


                        include "config.php";


                            $sql = "SELECT O.userId,O.orderID, O.Orderdate, O.SMid, O.ShippedDate, O.TotalPrice, O.OrderStatus, O.billingDate,
                            D.pid, D.Price, D.Quantity, P.Name, P.Picture
                            FROM customers C, orders O, orderdetails D, product P WHERE C.userId = O.userId AND P.pid = D.pid AND D.orderID = O.orderID AND O.userId = $user";
                            $result = mysqli_query($db, $sql);

                            while($row = mysqli_fetch_assoc($result)) {

                               $pid =  $row["pid"];
                               $userid= $row["userId"];
                                        ?>

                                        <!-- product -->



                                        <div align= "center">
                                                <div class="product-body">


                                                        <table style="width:100%", border=" 1px solid black">
                                                            <tr>
                                                                <th>OrderID</th>
                                                                <th>Order Date</th>
                                                                <th>Sales Manager</th>
                                                                <th>Shipping Date</th>
                                                                <th>Total Price</th>
                                                                <th>Status</th>
                                                                <th>Billing Date</th>
                                                                <th>Product</th>
                                                                <th>Price</th>
                                                                <th>Quantity</th>


                                                            </tr>
                                                            <tr>
                                                                <td> <?php echo $row["orderID"];?> </td>
                                                                <td> <?php echo $row["Orderdate"];?> </td>
                                                                <td> <?php echo $row["SMid"];?> </td>
                                                                <td> <?php echo $row["ShippedDate"];?> </td>
                                                                <td> <?php echo $row["TotalPrice"];?> </td>
                                                                <td> <?php echo $row["OrderStatus"];?> </td>
                                                                <td> <?php echo $row["billingDate"];?> </td>
                                                                <td> <?php echo $row["Name"];?> </td>
                                                                <td> <?php echo $row["Price"];?> </td>
                                                                <td> <?php echo $row["Quantity"];?> </td>

                                                            </tr>

                                                            </table>

                                                            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['Picture'] ).'">'. "<br>". "<br>"."<br>" . "<br>". "<br>"; ?>
                                                            <div align= "center">
                                                            <form action = "addcomment.php?pid=<?php echo $row['pid'];?> "method = "POST">

                                                                <input type ="number" name = "rating" placeholder = "Your Rating! 0-5"><br>

                                                                <input type ="text" name ="Comment" placeholder = "Write Your Comments Here"><br>
                                                                <!-- <button> ADD YOUR COMMENT!</button> -->



                                                                <div class="form-group">
  				                                                <input type="submit" name="submit" value="ADD YOUR COMMENT!" >
			                                                    </div>


                                                            </form>
                                                            </div>


                                                </div>
                                        </div>
                                        <!-- /product -->

                                        <?php
                                    }


                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /store products -->


                    <!-- /STORE -->

                <!-- /row -->

            <!-- /container -->

        <!-- /SECTION -->


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
