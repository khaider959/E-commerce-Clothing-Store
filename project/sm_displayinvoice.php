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
		 <link type="text/css" rel="stylesheet" href="css/style.css"/>
		 

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"></i> Sales Manager Dashboard</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="./sm_logout.php"><i class="fa fa-user-o"></i> Logout</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->
		

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/hulu.png" alt="" width="300px" height="100px">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								
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
                        <li > <a href="./smwelcome.php">My Account</a></li>
						<li> <a href="./displayorders.php">View and Manage Orders</a></li>
						
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
            
				<table>
                <tr> <th>Product </th> <th> Price</th> <th>Quantity </th> </tr>
                <?php
                  include "config.php";
			      session_start();
			      error_reporting(0);
			      $getuser=$_SESSION['usersm'];
			      if ($getuser== true)
			      {

			      }
			      else
			      {
				    header("Location: sm_loginPage.php");
                  }
                  
                
                 
                    
                         
                  if (!($id = (isset($_GET['id']) ? (int) $_GET['id'] : 0))) 
                  {
                    echo 'Error: Company ID is required!';
                  }
                  else 
                  {
                      $id = $_GET['id'];
                      $sql_statement = "SELECT C.*, P.Name,OD.*,O.TotalPrice,O.Orderdate,O.billingDate FROM orders O,orderdetails OD, product P, customers C WHERE C.userId=O.userId AND O.orderID=OD.orderID AND P.pid=OD.pid AND OD.orderID='" . $_GET['id'] . "'";
                      $data = mysqli_query($db, $sql_statement);
                      $result= mysqli_fetch_assoc($data);
                      echo"<h2>Invoice </h2>";
                      echo"<br>";
                      echo"<br>";
                      echo"<h4 >Order Number: </h4>".$result['orderID'];
                      echo"<br>";
                      echo"<br>";
                      echo"<h4 >User Identification: </h4>".$result['creditName'];
                      echo"<br>";
                      echo"<br>";
                      echo"<h4 >Credit Card Number: </h4>".$result['creditCardNo'];
                      echo"<br>";
                      echo"<br>";
                      echo"<h4>Billing Address: </h4>".$result['billingAddress'];
                      echo"<br>";
                      echo"<br>";
                      echo"<h4>Order Placed on:</h4>".$result['Orderdate'];
                      echo"<br>";
                      echo"<br>";
                      echo"<h4>Billing Date: </h4>".$result['billingDate'];
                      echo"<br>";
                      echo"<br>";
                    
                      echo"<h4>Total Price:</h4>".$result['TotalPrice'];
                      echo"<br>";
                      echo"<br>";

                      echo"<h2>Details: </h2>";
                      echo"<br>";

                      $result = mysqli_query($db, $sql_statement);
                      while($row = mysqli_fetch_assoc($result))
	                {
                
                        echo "<tr>";
                        
                        echo "<td>" . $row['Name'] . "</td>";
                        echo "<td>" . $row['Price'] . "</td>";
                        echo "<td>" . $row['Quantity']. "</td>";
                       
                        echo "</tr>";
                    }
                    
                    
                     
                    
                  }
                  
                  
           
             ?>
             </table>

            

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
