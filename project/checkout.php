<?php
	session_start();
	include "userAutocheck.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>hulu</title>

 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<link rel="stylesheet" href="css/font-awesome.min.css">

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

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="homepage.php">Home</a></li>
							<li class="active">Checkout</li>
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

					<div class="col-md-7">
						<!-- shipping Details -->
						<div class="shipping-details">
							<div class="section-title">
								<h3 class="title">Shipping Information</h3>
							</div>
              <form action="checkoutquery.php" method="POST">
                  <div class="form-group row" >
                      <label for="oname" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                          <input type="text" name="name" class="form-control" id="oname" placeholder="Harry">
                      </div>
                  </div>

                  <div class="form-group row">
                      <label for="osurname" class="col-sm-2 col-form-label">Surname</label>
                      <div class="col-sm-10">
                          <input type="text" name="surname" class="form-control" id="osurname" placeholder="Potter">
                      </div>
                  </div>
									<div class="form-group row">
											<label for="email" class="col-sm-2 col-form-label">Email</label>
											<div class="col-sm-10">
													<input type="email" name="email" class="form-control" id="email" placeholder="potter@gmail.com">
											</div>
									</div>
                  <div class="form-group row">
                      <label for="oaddress" class="col-sm-2 col-form-label">Address</label>
                      <div class="col-sm-10">
                          <input type="text" name="address" class="form-control" id="oaddress" placeholder="R87 Street 12 Levis London UK">
                      </div>
                  </div>

                  <h3> Payment </h3>
                  <div class="form-group row">
                      <label for="creditCardNo" class="col-sm-2 col-form-label">Credit Card Number</label>
                      <div class="col-sm-10">
                          <input type="number" name="creditCardNo" class="form-control" id="creditCardNo" placeholder="your credit card number">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="creditCardName" class="col-sm-2 col-form-label">Credit Card Name</label>
                      <div class="col-sm-10">
                          <input type="text" name="creditCardName" class="form-control" id="creditCardName" placeholder="name on your credit card">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="creditCardExpMonth" class="col-sm-2 col-form-label">Credit Card Expiry Month</label>
                    <div class="col-sm-10">
                      <select name="expiry_month">

                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                            echo '<option value="'.$i.'">'.$i.'</option>';
                        } ?>
                      </select>
											</div>
										</div>
										<div class="form-group row">
                      <label for="creditCardExpYear" class="col-sm-2 col-form-label">Credit Card Expiry Year</label>
                      <div class="col-sm-10">
                        <select name="expiry_year">
                          <?php
                          for ($i = 2020; $i <= 2040; $i++) {
                              echo '<option value="'.$i.'">'.$i.'</option>';
                          } ?>
                        </select>
                      </div>
                  </div>
									<div class="form-group row">
                      <label for="creditCardPin" class="col-sm-2 col-form-label">CVC Code</label>
                      <div class="col-sm-10">
                          <input type="number" name="cvc" class="form-control" id="cvc" placeholder="cvc">
                      </div>
                  </div>
                  <input type="submit" class="btn btn-primary btn-block btn-lg" value="Update Info">
              </form>
						</div>


						<!-- /Shipping Details -->
					</div>

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

	</body>
</html>
