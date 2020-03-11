<?php
	include './langconf.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="icon" type="text/css" href="./img/Logo.jpg">
	<meta  name="viewport" content="width=device-width,initial-scale=1">
	<script src="./js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.css">
	<script src="./js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav class="navbar navbar-style">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php"><img class="logo" src="./img/Logo.jpg"><?php echo $lang['title']; ?></a><br><h6 style="font-size: 70%;"><?php echo $lang['affiliate']; ?></h6>
			</div>
			<div class="collapse navbar-collapse" id="micon">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php"><b><?php echo $lang['home']; ?></b></a></li>
				<li class="dropdown">
		        	<a class="dropdown-toggle" data-toggle="dropdown" href="#" ><b>About Us</b><span class="caret"></span></a>
		          	<ul class="dropdown-menu" style="background-color: transparent;">
			            <li><a href="history.php" ><b>History</b></a></li>
			            <li><a href="academics.php" ><b>Academics</b></a></li>
			        </ul>
		        </li>
		        <li class="dropdown">
		        	<a class="dropdown-toggle" data-toggle="dropdown" href="#" ><b>Departments</b><span class="caret"></span></a>
		          	<ul class="dropdown-menu" style="background-color: transparent;">
			            <li><a href="civildept.php" ><b>Civil Engineering</b></a></li>
			            <li><a href="csedept.php" ><b>Computer Science Engg</b></a></li>
			            <li><a href="ecedept.php" ><b>Electronics and Communication</b></a></li>
			            <li><a href="medept.php" ><b>Mechanical Engineering</b></a></li>
			        </ul>
		        </li>
		        <li><a href="cources.php"><b>Cources Offered</b></a></li>
		        <li class="dropdown">
		        	<a class="dropdown-toggle" data-toggle="dropdown" href="#" ><b>Our Faculty</b><span class="caret"></span></a>
		          	<ul class="dropdown-menu" style="background-color: transparent;">
			            <li><a href="civilstaff.php" ><b>Civil Engineering Staff</b></a></li>
			            <li><a href="csestaff.php" ><b>Computer Science Engg Staff</b></a></li>
			            <li><a href="ecestaff.php" ><b>Electronics and Communication Staff</b></a></li>
			            <li><a href="mestaff.php" ><b>Mechanical Engineering Staff</b></a></li>
			            <li><a href="officestaff.php" ><b>Office Staff</b></a></li>
			        </ul>
		        </li>
				<li><a href="login.php"><b>Login</b></a></li>
			</ul>
			</div>
		</div>
	</nav>
	<div class="lang_links bg-dark">
		<a href="index.php?lang=en"><?php echo $lang['lang_en']; ?></a> | <a href="index.php?lang=kn"><?php echo $lang['lang_kn']; ?></a>
	</div>
</body>
</html>