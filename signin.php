<!DOCTYPE html>

<?php 

session_start();

?>`
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">
    <title>ParkSmart Console</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!-- HEADER
	================================================== -->
    <header class="site-header" role="banner">
        <!-- NAVBAR
		================================================== -->
        <div class="navbar-wrapper">
            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand"><img src="assets/img/logo.png" alt="ParkSmart"></div>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#">View Parking Lot</a></li>
                            <li><a href="#">Log</a></li>
                            <li><a href="#">Analytics</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Account 
									<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Details</a></li>
                                    <li><a href="#">Change Password</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container">
        <form action="includes/signin.inc.php" class="form-signin" method="POST">
            <h2 class="form-signin-header">Please sign in</h2>
            <input type="text" name="uid" id="username" class="form-control" placeholder="Username">
            <input type="password" name="password" id="pwd" class="form-control" placeholder="Password">
            <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
        </form>
    </div>
        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/jquery-2.1.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
    <script type="text/javascript">
    try { Typekit.load(); } catch (e) {}
    </script>
</body>

</html>