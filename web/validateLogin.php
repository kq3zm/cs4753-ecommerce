<!DOCTYPE html>
<html>
<head>
<title>Eshop a Flat E-Commerce Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- cart -->
	<script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<ul>
						<li><a href="account.html"><span class="glyphicon glyphicon-user"> </span>My Account</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<div class="banner-top">
		<div class="container">
				<nav class="navbar navbar-default" role="navigation">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
				<div class="logo">
					<h1><a href="index.php"><span>B</span> ored Boards</a></h1>
					<p> Always have new games to play!</p>
				</div>
	    </div>
	    <!--/.navbar-header-->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="products.html">Board Games</a></li>
			<li><a href="about.html">ABOUT</a><li>
	        </ul>
	    </div>
	    <!--/.navbar-collapse-->
	</nav>
	<!--/.navbar-->
</div>
</body> 

<?php
$UserPassword = $_POST["UserPassword"]; 
$UserEmail = $_POST["UserEmail"]; 

//Connect to DB
$user= 'root';
$pass = '';
$db = 'ecomm';

$conn = new mysqli('localhost', $user, $pass, $db) or die ("Unable to connect to ecomm database");

$sqlcheck = "SELECT * FROM users WHERE UserEmail = '$UserEmail' AND UserPassword = '$UserPassword'";
$result = $conn->query($sqlcheck);

if ($result->num_rows ==1) { //<!--If find one result, then useremail and password match in the DB-->
	session_start();
	$_SESSION['UserEmail'] = $UserEmail;
	$UserFirstName;

	while ($result.next()){
		$UserFirstName = $result.getString("UserFirstName");
	}

	echo  "<script> window.location.assign('index.php'); </script>";
} 
else {
	echo "<script language=\"JavaScript\">\n";
	echo "alert('Username and/or Password was incorrect!');\n";
	echo "window.location='login.php'";
	echo "</script>";
}?>

</html>