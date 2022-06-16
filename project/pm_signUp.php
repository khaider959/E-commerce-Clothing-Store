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

    </head>
	<body>
	
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display=4">Welcome to Hulu .<h1>
                    <p class="lead">Women Clothing Store</p>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">&nbsp;</div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col"></div>
                    <div class="col-md-auto">
                        <h2>Sign Up
                            <small class="text-muted">Product Manager Dashboard</small>
                        </h2>
                    </div>
                    <div class="col"></div>
                </div>

                <div class="text-center">
                    <img src="img/hulu.png" class="rounded" alt="logo" width="150">
                </div>

                <div class="row">
                    <div class="col">&nbsp;</div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-3"></div>
                    <div class="col-6">

                    <form action="pm_signUpQuery.php" method="POST">
                        <div class="form-group row" >
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="PMname" class="form-control" id="inputName" placeholder="Jane Doe">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="PMusername" class="form-control" id="inputUsername" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="PMemail" class="form-control" id="inputEmail" placeholder="janedoe@gmail.com">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="PMpass" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary btn-block btn-lg" value="Sign Up">
                    </form>

                </div>

                <div class="col-3"></div>  
            </div>
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

	</body>
</html>