
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

        <title>Hulu - Store for Women</title>

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
                            <li class="active"><a href="products.php">Products</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /BREADCRUMB -->
        <div class="row" style="margin-bottom: 5em;">
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<form method="POST">
									<h5>Filter by Price</h5>
									<div class="price-filter">
										<div id="price-slider"></div>
										<div class="input-number price-min">
											<input id="price-min" name="price-min" type="number">
											<span class="qty-up">+</span>
											<span class="qty-down">-</span>
										</div>
										<span>-</span>
										<div class="input-number price-max">
											<input id="price-max" name="price-max" type="number">
											<span class="qty-up">+</span>
											<span class="qty-down">-</span>
										</div>
									</div>
									<input type="radio" name="order" value="ASC" checked /> Ascending order<br />
									<input type="radio" name="order" value="DESC" /> Descending order<br />
									<input class="primary-btn" style="margin-top: 1em; float: right; background: #d10024" type="submit" value="Filter"/>
								</form>
							</div>
							<div class="col-md-4"></div>
						</div>
        <!-- SECTION -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- STORE -->
                    <div id="store" class="col-md-9">
                        <!-- store products -->
                        <div class="row">
                            <!-- product -->
                            <?php include "user_allproducts.php" ?>
                            <!-- /product -->
                    </div>
                    <!-- /STORE -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
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
